<x-layouts.dashboard title="Student Dashboard">

    <h1 class="text-3xl font-bold text-gray-800">
        Welcome, {{ auth()->user()->name }} 👋
    </h1>

    <p class="text-gray-500 mt-2">
        Welcome to your student dashboard.
    </p>

</x-layouts.dashboard>