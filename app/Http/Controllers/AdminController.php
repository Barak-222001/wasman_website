<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\InternApplication;
use App\Models\VolunteerApplication;
use App\Models\ResearchAssistantApplication;
use App\Models\PartnerApplication;
use App\Models\ContactMessage;
use App\Models\GeneralEnquiry;


use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Return the correct SQL expression for grouping records by month.
     *
     * Local development uses SQLite, while Laravel Cloud production uses MySQL.
     */
    private function monthExpression(): string
    {
        return DB::connection()->getDriverName() === 'sqlite'
            ? "strftime('%Y-%m', created_at)"
            : "DATE_FORMAT(created_at, '%Y-%m')";
    }

 public function index(Request $request)
    {
        $search = $request->input('search');
        $area = $request->input('area');
        $sort = $request->input('sort', 'newest');
        
        $applications = InternApplication::query()
        ->when($search, function ($query, $search) {
            $query->where('full_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('institution', 'like', "%{$search}%")
                ->orWhere('program', 'like', "%{$search}%")
                ->orWhere('area', 'like', "%{$search}%");
        })
        ->when($area, function ($query, $area) {
            $query->where('area', $area);
            })
        ->when($sort === 'oldest', function ($query) {
            $query->oldest();
            }, function ($query) {
            $query->latest();
})

        ->paginate(10)
        ->withQueryString();

        $totalApplications = InternApplication::count();

        // CHART BAR
        $areaStats = InternApplication::selectRaw('area, COUNT(*) as total')
        ->groupBy('area')
        ->pluck('total', 'area');

        // CHART 2
        $monthlyStats = InternApplication::selectRaw(
                "{$this->monthExpression()} as month, COUNT(*) as total"
            )
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        return view('admin', [
            'applications' => $applications,
            'totalApplications' => $totalApplications,
            'areaStats' => $areaStats,
            'monthlyStats' => $monthlyStats,
        ]);
    }

public function downloadCv(InternApplication $application)
    {
        // route model binding
        
        return Storage::disk('public')
            ->download($application->document);
    }

public function destroy(InternApplication $application)
    {
        // Storage::disk('public')
        //     ->delete($application->document);

        if ($application->document) {
            Storage::disk('public')->delete($application->document);
            }

        $application->delete();

        return redirect()
        ->route('admin.internships')
        ->with('success', 'Application deleted successfully.');
    }
public function edit(InternApplication $application)
    {
        return view('edit-intern-application', [
            'application' => $application
        ]);
    }

public function update(Request $request, InternApplication $application)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'institution' => 'required|string|max:255',
            'program' => 'required|string',
            'area' => 'required|string',
            'reason' => 'required|string|max:1000',
        ]);

        $application->update([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone_number' => $validated['phoneNumber'],
            'institution' => $validated['institution'],
            'program' => $validated['program'],
            'area' => $validated['area'],
            'reason' => $validated['reason'],
        ]);

    return redirect()
    ->route('admin.internships')
    ->with('success', 'Application updated successfully.');
}

// VOLUNTEER

/*
|--------------------------------------------------------------------------
| VOLUNTEER APPLICATIONS
|--------------------------------------------------------------------------
*/

public function volunteers(Request $request)
{
    $search = $request->input('search');
    $area = $request->input('area');
    $sort = $request->input('sort', 'newest');

    $volunteers = VolunteerApplication::query()
    

        ->when($search, function ($query, $search) {

            $query->where(function ($q) use ($search) {

                $q->where('full_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone_number', 'like', "%{$search}%")
                    ->orWhere('country', 'like', "%{$search}%")
                    ->orWhere('volunteer_area', 'like', "%{$search}%")
                    ->orWhere('availability', 'like', "%{$search}%");

            });

        })

        ->when($area, function ($query, $area) {

            $query->where('volunteer_area', $area);

        })

        ->when(
            $sort === 'oldest',

            function ($query) {
                $query->oldest();
            },

            function ($query) {
                $query->latest();
            }
        )

        ->paginate(10)

        ->withQueryString();


    $totalVolunteers = VolunteerApplication::count();
    // CHARTS
        $volunteerAreaStats = VolunteerApplication::selectRaw(
            'volunteer_area, COUNT(*) as total'
        )
        ->groupBy('volunteer_area')
        ->pluck('total', 'volunteer_area');


    $volunteerMonthlyStats = VolunteerApplication::selectRaw(
            "{$this->monthExpression()} as month, COUNT(*) as total"
        )
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');


   return view('admin-volunteers', [
    'volunteers' => $volunteers,
    'totalVolunteers' => $totalVolunteers,
    'volunteerAreaStats' => $volunteerAreaStats,
    'volunteerMonthlyStats' => $volunteerMonthlyStats,
]);

}


public function editVolunteer(VolunteerApplication $volunteer)
{
    return view('edit-volunteer-application', [
        'volunteer' => $volunteer,
    ]);
}


public function updateVolunteer(
    Request $request,
    VolunteerApplication $volunteer
) {
    $validated = $request->validate([
        'fullName' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phoneNumber' => 'nullable|string|max:20',
        'country' => 'nullable|string|max:255',
        'volunteerArea' => 'required|string|max:255',
        'availability' => 'required|string|max:255',
        'reason' => 'required|string|max:1000',
    ]);


    $volunteer->update([
        'full_name' => $validated['fullName'],
        'email' => $validated['email'],
        'phone_number' => $validated['phoneNumber'] ?? null,
        'country' => $validated['country'] ?? null,
        'volunteer_area' => $validated['volunteerArea'],
        'availability' => $validated['availability'],
        'reason' => $validated['reason'],
    ]);


    return redirect()
        ->route('admin.volunteers')
        ->with(
            'success',
            'Volunteer application updated successfully.'
        );
}


public function destroyVolunteer(VolunteerApplication $volunteer)
{
    $volunteer->delete();

    return redirect()
        ->route('admin.volunteers')
        ->with(
            'success',
            'Volunteer application deleted successfully.'
        );
}

/*
|--------------------------------------------------------------------------
| RESEARCH ASSISTANCE APPLICATIONS
|--------------------------------------------------------------------------
*/

public function researchAssistants(Request $request)
{
    $search = $request->input('search');
    $area = $request->input('area');
    $sort = $request->input('sort', 'newest');


    $applications = ResearchAssistantApplication::query()

        ->when($search, function ($query, $search) {

            $query->where(function ($q) use ($search) {

                $q->where('full_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('institution', 'like', "%{$search}%")
                    ->orWhere('research_topic', 'like', "%{$search}%")
                    ->orWhere('research_area', 'like', "%{$search}%");

            });

        })

        ->when($area, function ($query, $area) {

            $query->where('research_area', $area);

        })

        ->when(
            $sort === 'oldest',

            function ($query) {
                $query->oldest();
            },

            function ($query) {
                $query->latest();
            }
        )

        ->paginate(10)

        ->withQueryString();


    $totalResearchRequests = ResearchAssistantApplication::count();


    $documentsUploaded = ResearchAssistantApplication::whereNotNull(
        'document'
    )->count();


    $researchAreaStats = ResearchAssistantApplication::selectRaw(
            'research_area, COUNT(*) as total'
        )
        ->groupBy('research_area')
        ->pluck('total', 'research_area');


    $researchMonthlyStats = ResearchAssistantApplication::selectRaw(
            "{$this->monthExpression()} as month, COUNT(*) as total"
        )
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');


    return view('admin-research-assistants', [
        'applications' => $applications,
        'totalResearchRequests' => $totalResearchRequests,
        'documentsUploaded' => $documentsUploaded,
        'researchAreaStats' => $researchAreaStats,
        'researchMonthlyStats' => $researchMonthlyStats,
    ]);
}


public function downloadResearchDocument(
    ResearchAssistantApplication $application
) {
    if (
        !$application->document ||
        !Storage::disk('public')->exists($application->document)
    ) {
        abort(404);
    }


    return Storage::disk('public')->download(
        $application->document
    );
}


public function editResearchAssistant(
    ResearchAssistantApplication $application
) {
    return view('edit-research-assistant-application', [
        'application' => $application,
    ]);
}


public function updateResearchAssistant(
    Request $request,
    ResearchAssistantApplication $application
) {
    $validated = $request->validate([

        'fullName' => 'required|string|max:255',

        'email' => 'required|email|max:255',

        'institution' => 'nullable|string|max:255',

        'researchTopic' => 'required|string|max:255',

        'researchArea' => 'required|string|max:255',

        'timeline' => 'nullable|string|max:255',

        'researchNeeds' => 'required|string|max:2000',

        'document' => 'nullable|file|mimes:pdf,doc,docx|max:5120',

    ]);


    $documentPath = $application->document;


    if ($request->hasFile('document')) {

        if ($application->document) {

            Storage::disk('public')->delete(
                $application->document
            );

        }


        $documentPath = $request
            ->file('document')
            ->store(
                'research_assistant_documents',
                'public'
            );

    }


    $application->update([

        'full_name' => $validated['fullName'],

        'email' => $validated['email'],

        'institution' => $validated['institution'] ?? null,

        'research_topic' => $validated['researchTopic'],

        'research_area' => $validated['researchArea'],

        'timeline' => $validated['timeline'] ?? null,

        'research_needs' => $validated['researchNeeds'],

        'document' => $documentPath,

    ]);


    return redirect()
        ->route('admin.research-assistants')
        ->with(
            'success',
            'Research assistance request updated successfully.'
        );
}


public function destroyResearchAssistant(
    ResearchAssistantApplication $application
) {
    if ($application->document) {

        Storage::disk('public')->delete(
            $application->document
        );

    }


    $application->delete();


    return redirect()
        ->route('admin.research-assistants')
        ->with(
            'success',
            'Research assistance request deleted successfully.'
        );
}

/*
|--------------------------------------------------------------------------
| PARTNERSHIP APPLICATIONS
|--------------------------------------------------------------------------
*/

public function partners(Request $request)
{
    $search = $request->input('search');

    $type = $request->input('type');

    $sort = $request->input('sort', 'newest');


    $partners = PartnerApplication::query()

        ->when($search, function ($query, $search) {

            $query->where(function ($q) use ($search) {

                $q->where('organization_name', 'like', "%{$search}%")
                    ->orWhere('contact_person', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone_number', 'like', "%{$search}%")
                    ->orWhere('country', 'like', "%{$search}%")
                    ->orWhere('partnership_type', 'like', "%{$search}%");

            });

        })

        ->when($type, function ($query, $type) {

            $query->where('partnership_type', $type);

        })

        ->when(
            $sort === 'oldest',

            function ($query) {
                $query->oldest();
            },

            function ($query) {
                $query->latest();
            }
        )

        ->paginate(10)

        ->withQueryString();


    $totalPartners = PartnerApplication::count();


    $partnershipTypeStats = PartnerApplication::selectRaw(
            'partnership_type, COUNT(*) as total'
        )
        ->groupBy('partnership_type')
        ->pluck('total', 'partnership_type');


    $partnerMonthlyStats = PartnerApplication::selectRaw(
            "{$this->monthExpression()} as month, COUNT(*) as total"
        )
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');


    return view('admin-partners', [

        'partners' => $partners,

        'totalPartners' => $totalPartners,

        'partnershipTypeStats' => $partnershipTypeStats,

        'partnerMonthlyStats' => $partnerMonthlyStats,

    ]);
}


public function editPartner(
    PartnerApplication $partner
) {
    return view('edit-partner-application', [

        'partner' => $partner,

    ]);
}


public function updatePartner(
    Request $request,
    PartnerApplication $partner
) {
    $validated = $request->validate([

        'organizationName' => 'required|string|max:255',

        'contactPerson' => 'required|string|max:255',

        'email' => 'required|email|max:255',

        'phoneNumber' => 'nullable|string|max:20',

        'country' => 'nullable|string|max:255',

        'partnershipType' => 'required|string|max:255',

        'partnershipMessage' => 'required|string|max:2000',

    ]);


    $partner->update([

        'organization_name' => $validated['organizationName'],

        'contact_person' => $validated['contactPerson'],

        'email' => $validated['email'],

        'phone_number' => $validated['phoneNumber'] ?? null,

        'country' => $validated['country'] ?? null,

        'partnership_type' => $validated['partnershipType'],

        'partnership_message' => $validated['partnershipMessage'],

    ]);


    return redirect()
        ->route('admin.partners')
        ->with(
            'success',
            'Partnership request updated successfully.'
        );
}


public function destroyPartner(
    PartnerApplication $partner
) {
    $partner->delete();


    return redirect()
        ->route('admin.partners')
        ->with(
            'success',
            'Partnership request deleted successfully.'
        );
}


// LEAVE MESSAGE
public function messages(Request $request)
{
    $query = ContactMessage::query();

    /*
    |--------------------------------------------------------------------------
    | Search
    |--------------------------------------------------------------------------
    */
    if ($request->filled('search')) {
        $search = $request->search;

        $query->where(function ($q) use ($search) {
            $q->where('full_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('phone_number', 'like', "%{$search}%")
                ->orWhere('subject', 'like', "%{$search}%")
                ->orWhere('message', 'like', "%{$search}%");
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Category Filter
    |--------------------------------------------------------------------------
    */
    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    /*
    |--------------------------------------------------------------------------
    | Read / Unread Filter
    |--------------------------------------------------------------------------
    */
    if ($request->filled('status')) {

        if ($request->status === 'read') {
            $query->where('is_read', true);
        }

        if ($request->status === 'unread') {
            $query->where('is_read', false);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Sorting
    |--------------------------------------------------------------------------
    */
    if ($request->sort === 'oldest') {
        $query->oldest();
    } else {
        $query->latest();
    }

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    */
    $messages = $query
        ->paginate(10)
        ->withQueryString();

    /*
    |--------------------------------------------------------------------------
    | Statistics
    |--------------------------------------------------------------------------
    */
    $totalMessages = ContactMessage::count();

    $unreadMessages = ContactMessage::where('is_read', false)->count();

    $readMessages = ContactMessage::where('is_read', true)->count();

    /*
    |--------------------------------------------------------------------------
    | Messages by Category
    |--------------------------------------------------------------------------
    */
    $categoryStats = ContactMessage::selectRaw(
        'category, COUNT(*) as total'
    )
        ->groupBy('category')
        ->orderByDesc('total')
        ->get();

    /*
    |--------------------------------------------------------------------------
    | Messages by Month - SQLite
    |--------------------------------------------------------------------------
    */
    $monthlyStats = ContactMessage::selectRaw(
        "{$this->monthExpression()} as month, COUNT(*) as total"
    )
        ->groupBy('month')
        ->orderBy('month')
        ->get();

    return view('admin-messages', compact(
        'messages',
        'totalMessages',
        'unreadMessages',
        'readMessages',
        'categoryStats',
        'monthlyStats'
    ));
}


/*
|--------------------------------------------------------------------------
| View Individual Message
|--------------------------------------------------------------------------
*/

public function showMessage(ContactMessage $message)
{
    if (!$message->is_read) {
        $message->update([
            'is_read' => true
        ]);
    }

    return view('admin-message-show', compact('message'));
}


/*
|--------------------------------------------------------------------------
| Download Message Attachment
|--------------------------------------------------------------------------
*/

public function downloadMessageAttachment(ContactMessage $message)
{
    if (
        !$message->attachment ||
        !Storage::disk('public')->exists($message->attachment)
    ) {
        abort(404, 'Attachment not found.');
    }

    return Storage::disk('public')->download(
        $message->attachment
    );
}


/*
|--------------------------------------------------------------------------
| Delete Message
|--------------------------------------------------------------------------
*/

public function destroyMessage(ContactMessage $message)
{
    if (
        $message->attachment &&
        Storage::disk('public')->exists($message->attachment)
    ) {
        Storage::disk('public')->delete(
            $message->attachment
        );
    }

    $message->delete();

    return redirect()
        ->route('admin.messages')
        ->with(
            'success',
            'Message deleted successfully.'
        );
}

/*
|--------------------------------------------------------------------------
| GENERAL ENQUIRIES
|--------------------------------------------------------------------------
*/

public function generalEnquiries(Request $request)
{
    $query = GeneralEnquiry::query();

    /*
    |--------------------------------------------------------------------------
    | Search
    |--------------------------------------------------------------------------
    */

    if ($request->filled('search')) {

        $search = $request->search;

        $query->where(function ($q) use ($search) {

            $q->where('full_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('phone_number', 'like', "%{$search}%")
                ->orWhere('enquiry_type', 'like', "%{$search}%")
                ->orWhere('message', 'like', "%{$search}%");

        });
    }


    /*
    |--------------------------------------------------------------------------
    | Enquiry Type Filter
    |--------------------------------------------------------------------------
    */

    if ($request->filled('enquiry_type')) {

        $query->where(
            'enquiry_type',
            $request->enquiry_type
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Read / Unread Filter
    |--------------------------------------------------------------------------
    */

    if ($request->filled('status')) {

        if ($request->status === 'read') {

            $query->where('is_read', true);

        }

        if ($request->status === 'unread') {

            $query->where('is_read', false);

        }
    }


    /*
    |--------------------------------------------------------------------------
    | Sort
    |--------------------------------------------------------------------------
    */

    if ($request->sort === 'oldest') {

        $query->oldest();

    } else {

        $query->latest();

    }


    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    */

    $enquiries = $query
        ->paginate(10)
        ->withQueryString();


    /*
    |--------------------------------------------------------------------------
    | Summary Statistics
    |--------------------------------------------------------------------------
    */

    $totalEnquiries = GeneralEnquiry::count();

    $unreadEnquiries = GeneralEnquiry::where(
        'is_read',
        false
    )->count();

    $readEnquiries = GeneralEnquiry::where(
        'is_read',
        true
    )->count();


    /*
    |--------------------------------------------------------------------------
    | Enquiries by Type
    |--------------------------------------------------------------------------
    */

    $typeStats = GeneralEnquiry::selectRaw(
        'enquiry_type, COUNT(*) as total'
    )
        ->groupBy('enquiry_type')
        ->orderByDesc('total')
        ->get();


    /*
    |--------------------------------------------------------------------------
    | Enquiries by Month - SQLite
    |--------------------------------------------------------------------------
    */

    $monthlyStats = GeneralEnquiry::selectRaw(
        "{$this->monthExpression()} as month, COUNT(*) as total"
    )
        ->groupBy('month')
        ->orderBy('month')
        ->get();


    return view(
        'admin-general-enquiries',
        compact(
            'enquiries',
            'totalEnquiries',
            'unreadEnquiries',
            'readEnquiries',
            'typeStats',
            'monthlyStats'
        )
    );
}


/*
|--------------------------------------------------------------------------
| View Individual Enquiry
|--------------------------------------------------------------------------
*/

public function showGeneralEnquiry(
    GeneralEnquiry $enquiry
) {
    if (!$enquiry->is_read) {

        $enquiry->update([
            'is_read' => true,
        ]);
    }

    return view(
        'admin-general-enquiry-show',
        compact('enquiry')
    );
}


/*
|--------------------------------------------------------------------------
| Delete General Enquiry
|--------------------------------------------------------------------------
*/

public function destroyGeneralEnquiry(
    GeneralEnquiry $enquiry
) {
    $enquiry->delete();

    return redirect()
        ->route('admin.general-enquiries')
        ->with(
            'success',
            'General enquiry deleted successfully.'
        );
}


}
