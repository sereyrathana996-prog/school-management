<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Teacher Dashboard</title>
</head>

<body>

    <h1>Teacher Dashboard</h1>

    <p>
        Welcome,
        <strong>{{ auth()->user()->name }}</strong>
    </p>

    <p>
        Role:
        <strong>{{ auth()->user()->role }}</strong>
    </p>

    <hr>

    <h2>Teacher Features</h2>

    <ul>
        <li>My Classes</li>
        <li>Student Attendance</li>
        <li>Exam Results</li>
        <li>My Timetable</li>
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