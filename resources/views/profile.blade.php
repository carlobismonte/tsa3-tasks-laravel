<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
        }

        nav {
            background: #2563eb;
            padding: 18px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ddd;
        }

        h1 {
            color: #2563eb;
        }

        .info {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .info strong {
            color: #333;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/tasks">Task List</a>
    <a href="/profile">Profile</a>
    <a href="/about">About</a>
</nav>

<div class="container">
    <h1>User Profile</h1>

    @if ($user)
        <div class="info">
            <strong>ID:</strong> {{ $user->id }}
        </div>

        <div class="info">
            <strong>Username:</strong> {{ $user->username }}
        </div>

        <div class="info">
            <strong>Full Name:</strong> {{ $user->full_name }}
        </div>

        <div class="info">
            <strong>Email:</strong> {{ $user->email }}
        </div>
    @else
        <p>No user profile found.</p>
    @endif
</div>

</body>
</html>
