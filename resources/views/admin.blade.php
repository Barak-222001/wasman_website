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

            </tr>

        @empty
        <tr>
            <td colspan="8">
                No internship applications found.
            </td>
        </tr>
        @endforelse

    </tbody>

</table>