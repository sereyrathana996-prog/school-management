<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Parent Dashboard</title>
</head>

<body>

    <h1>Parent Dashboard</h1>

    <p>
        Welcome,
        <strong>{{ auth()->user()->name }}</strong>
    </p>

    <p>
        Role:
        <strong>{{ auth()->user()->role }}</strong>
    </p>

    <hr>

    <h2>Parent Features</h2>

    <ul>
        <li>My Children</li>
        <li>Child Attendance</li>
        <li>Child Results</li>
        <li>Fees</li>
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