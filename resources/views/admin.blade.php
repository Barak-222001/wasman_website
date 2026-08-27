<table border="1">

    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Institution</th>
            <th>Program</th>
            <th>Area</th>
            <th>CV</th>
            <th>Phone</th>
            <th>Reason</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @forelse($applications as $application)

            <tr>
                <td>{{ $application->full_name }}</td>

                <td>{{ $application->email }}</td>

                <td>{{ $application->institution }}</td>

                <td>{{ $application->program }}</td>

                <td>{{ $application->area }}</td>

                <td>
                    <a href="/admin/applications/{{ $application->id }}/cv">
                        Download CV
                    </a>
                </td>

                <td>{{ $application->phone_number }}</td>

                <td>{{ $application->reason }}</td>

                <td>
                    <a href="/admin/applications/{{ $application->id }}/edit">
                        Edit
                    </a>

                    <form action="/admin/applications/{{ $application->id }}"
                        method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @empty
        <tr>
            <td colspan="9">
                No internship applications found.
            </td>
        </tr>
        @endforelse

    </tbody>

    @if(session('success'))

    <div style="
        padding: 15px;
        margin-bottom: 20px;
        background: #d1e7dd;
        color: #0f5132;
        border: 1px solid #badbcc;
    ">

        {{ session('success') }}

    </div>

@endif

</table>