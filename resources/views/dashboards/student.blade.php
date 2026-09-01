<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Student Dashboard</title>
</head>

<body>

    <h1>Student Dashboard</h1>

    <p>
        Welcome,
        <strong>{{ auth()->user()->name }}</strong>
    </p>

    <p>
        Role:
        <strong>{{ auth()->user()->role }}</strong>
    </p>

    <hr>

    <h2>Student Features</h2>

    <ul>
        <li>My Profile</li>
        <li>My Timetable</li>
        <li>My Attendance</li>
        <li>My Results</li>
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