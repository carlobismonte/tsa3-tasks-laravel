<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: white;
        }

        .completed {
            color: green;
            font-weight: bold;
        }

        .pending {
            color: orange;
            font-weight: bold;
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
    <h1>Tasks for Today</h1>

    <p>Date: {{ today()->format('F d, Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td class="{{ $task->status }}">
                        {{ ucfirst($task->status) }}
                    </td>
                    <td>{{ $task->task_date->format('Y-m-d') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        No tasks scheduled for today.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
