<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - School Management System</title>
</head>

<body>

    <h1>Admin Dashboard</h1>

    <p>
        Welcome,
        <strong>{{ auth()->user()->name }}</strong>
    </p>

    <p>
        Role:
        <strong>{{ auth()->user()->role }}</strong>
    </p>

    <hr>

    <h2>School Management System</h2>

    <ul>
        <li>Manage Students</li>
        <li>Manage Teachers</li>
        <li>Manage Classes</li>
        <li>Manage Subjects</li>
        <li>Manage Attendance</li>
        <li>Manage Exams</li>
    </ul>

    <br>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">
            Logout
        </button>
    </form>

</body>
</html>