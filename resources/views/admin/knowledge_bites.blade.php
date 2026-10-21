@extends('layouts.admin')
@section('title', 'Manage Knowledge Bites')
@section('content')
<div style="max-width:1150px;margin:24px auto;padding:0 16px;font-family:Manrope,Arial,sans-serif;">
    <div style="background:linear-gradient(120deg,#052f43,#087f9c);color:white;padding:30px;border-radius:20px;margin-bottom:24px;">
        <h1 style="color:white;font-size:30px;margin:0 0 8px;">Knowledge Bites Management</h1>
        <p style="margin:0;">Upload a PDF, cover image and introductory text. Publish to feature the newest Bite first on the public website.</p>
        <a href="{{ url('/knowledge_bite') }}" target="_blank" rel="noopener" style="color:#9df4e6;display:inline-block;margin-top:12px;">View public page ↗</a>
    </div>
    @if(session('success'))<div role="status" style="padding:14px;background:#e1f9e9;border-radius:9px;margin-bottom:14px;">{{ session('success') }}</div>@endif
    @if($errors->any())
      <div role="alert" style="padding:14px;background:#fff1f0;border-radius:9px;margin-bottom:14px;"><strong>Please correct:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
    @endif
    <section style="background:white;padding:28px;border:1px solid #dcebed;border-radius:18px;box-shadow:0 12px 35px #052f4315;margin-bottom:28px;">
        <h2 style="font-size:23px;color:#052f43;">Add New Knowledge Bite</h2>
        <form method="POST" action="{{ route('admin.knowledge-bites.store') }}" enctype="multipart/form-data" style="display:grid;gap:18px;max-width:850px;">
            @csrf
            <label><strong>Title *</strong><input name="title" value="{{ old('title') }}" required maxlength="255" style="display:block;width:100%;padding:12px;border:1px solid #bacfd4;border-radius:9px;"></label>
            <label><strong>Knowledge area / topic</strong><input name="category" value="{{ old('category') }}" maxlength="100" placeholder="e.g. Fisheries & Aquaculture" style="display:block;width:100%;padding:12px;border:1px solid #bacfd4;border-radius:9px;"></label>
            <label><strong>Introductory / description text *</strong><textarea name="description" rows="5" required maxlength="4000" style="display:block;width:100%;padding:12px;border:1px solid #bacfd4;border-radius:9px;">{{ old('description') }}</textarea></label>
            <label><strong>PDF document * (max 20 MB)</strong><input type="file" name="pdf" required accept="application/pdf,.pdf" style="display:block;margin-top:9px;"></label>
            <label><strong>Cover image * (JPG, PNG, WebP; max 5 MB)</strong><input type="file" name="cover" required accept="image/jpeg,image/png,image/webp" style="display:block;margin-top:9px;"></label>
            <label style="display:flex;align-items:center;gap:10px;"><input type="checkbox" name="publish" value="1" {{ old('publish') ? 'checked' : '' }}> <strong>Publish immediately after upload</strong></label>
            <button type="submit" style="cursor:pointer;border:0;border-radius:30px;padding:13px 28px;background:#087f9c;color:#fff;font-weight:700;justify-self:start;">Save Knowledge Bite</button>
        </form>
    </section>
    <section style="background:white;padding:24px;border:1px solid #dcebed;border-radius:18px;">
        <h2 style="font-size:23px;color:#052f43;">Uploaded Publications</h2>
        <div style="overflow-x:auto;">
        <table style="width:100%;border-collapse:collapse;min-width:680px;">
            <thead><tr><th style="text-align:left;padding:12px;">Publication</th><th style="text-align:left;padding:12px;">Status</th><th style="text-align:left;padding:12px;">Created</th><th style="text-align:left;padding:12px;">Actions</th></tr></thead>
            <tbody>
            @forelse($bites as $bite)
                <tr style="border-top:1px solid #e0e9eb;">
                    <td style="padding:12px;"><strong>{{ $bite->title }}</strong><div>{{ $bite->category }}</div></td>
                    <td style="padding:12px;">{{ $bite->is_published ? 'Published' : 'Draft' }}</td>
                    <td style="padding:12px;">{{ $bite->created_at->format('j M Y') }}</td>
                    <td style="padding:12px;">
                        <form action="{{ route('admin.knowledge-bites.status', $bite) }}" method="POST" style="display:inline-block;margin:4px;">@csrf @method('PATCH')<input type="hidden" name="publish" value="{{ $bite->is_published ? 0 : 1 }}"><button type="submit">{{ $bite->is_published ? 'Unpublish' : 'Publish' }}</button></form>
                        <form action="{{ route('admin.knowledge-bites.destroy', $bite) }}" method="POST" onsubmit="return confirm('Permanently delete this PDF, its image and publication?')" style="display:inline-block;margin:4px;">@csrf @method('DELETE')<button type="submit">Delete</button></form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" style="padding:18px;">No uploads yet. Existing website Knowledge Bites are still available.</td></tr>
            @endforelse
            </tbody>
        </table>
        </div>
        {{ $bites->links() }}
    </section>
</div>
@endsection
