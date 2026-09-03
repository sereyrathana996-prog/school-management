<x-layouts.dashboard title="Admin Dashboard">

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Welcome, {{ auth()->user()->name }} 👋
        </h1>

        <p class="text-gray-500 mt-2">
            Here's what's happening in your school today.
        </p>
    </div>


    {{-- Statistics Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-gray-500">Total Students</p>

            <h3 class="text-3xl font-bold mt-2">
                0
            </h3>
        </div>


        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-gray-500">Total Teachers</p>

            <h3 class="text-3xl font-bold mt-2">
                0
            </h3>
        </div>


        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-gray-500">Total Classes</p>

            <h3 class="text-3xl font-bold mt-2">
                0
            </h3>
        </div>


        <div class="bg-white p-6 rounded-xl shadow-sm">
            <p class="text-gray-500">Total Subjects</p>

            <h3 class="text-3xl font-bold mt-2">
                0
            </h3>
        </div>

    </div>


    {{-- Quick Actions --}}
    <div class="mt-8 bg-white rounded-xl shadow-sm p-6">

        <h2 class="text-xl font-bold text-gray-800">
            Quick Actions
        </h2>

        <div class="mt-4 flex flex-wrap gap-4">

            <a
                href="{{ route('students.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg"
            >
                Add Student
            </a>

            <button class="px-4 py-2 bg-green-600 text-white rounded-lg">
                Add Teacher
            </button>

            <button class="px-4 py-2 bg-purple-600 text-white rounded-lg">
                Create Class
            </button>

        </div>

    </div>

</x-layouts.dashboard>