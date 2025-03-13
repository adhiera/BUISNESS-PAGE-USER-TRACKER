<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #007bff;
        }
        h2 {
            font-size: 22px;
            margin-top: 20px;
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .client-list {
            list-style: none;
            padding: 0;
        }
        .client-list li {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            margin: 5px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Business Tracker</h1>
        <p>This platform helps track and manage online clients efficiently.</p>

        <h2>Online Clients</h2>
        <ul class="client-list">
            <li>Client 1 (Last Visit: 2024-03-13 12:30 PM)</li>
            <li>Client 2 (Last Visit: 2024-03-13 02:15 PM)</li>
            <li>Client 3 (Last Visit: 2024-03-13 03:45 PM)</li>
        </ul>
    </div>
</body>
</html>
