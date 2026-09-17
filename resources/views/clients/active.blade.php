<!DOCTYPE html>
<html>
<head>
    <title>Active Clients</title>
</head>
<body>

    <h1>Active Clients</h1>

    @if($clients->count() > 0)

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>
                            <a href="/clients/{{ $client -> id }}" >View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <p>No active clients found.</p>

    @endif

</body>
</html>