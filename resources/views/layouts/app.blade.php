
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Website')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
            color: #333;
        }
        nav {
            background: #243447;
            padding: 16px 30px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 24px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 24px;
            background: white;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #e9eef4;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers.index') }}">Customer Accounts</a>
        <a href="{{ route('users.index') }}">User Accounts</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
