<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Welcome to Business Tracker</h1>
        <p>{{ $businessData['description'] }}</p>

        <h2>Online Clients</h2>
        <ul>
            @foreach ($onlineClients as $client)
                <li>{{ $client->client_id }} (Last Visit: {{ $client->last_visit }})</li>
            @endforeach
        </ul>
    </div>
</body>
</html>