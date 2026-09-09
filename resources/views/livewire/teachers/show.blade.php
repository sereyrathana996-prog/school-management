<div class="max-w-4xl mx-auto">

    <div class="mb-6">
        <a
            href="{{ route('teachers.index') }}"
            class="text-blue-600 hover:underline"
        >
            ← Back to Teachers
        </a>
    </div>

    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            Teacher Details
        </h1>

        <p class="text-gray-500 mt-1">
            View teacher information.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <p class="text-sm text-gray-500">Teacher ID</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $teacher->teacher_id }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Full Name</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $teacher->first_name }}
                    {{ $teacher->last_name }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Gender</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ ucfirst($teacher->gender) }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Date of Birth</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $teacher->date_of_birth ?? '-' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Phone</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $teacher->phone ?? '-' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $teacher->email ?? '-' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Specialization</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $teacher->specialization ?? '-' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Created At</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $teacher->created_at->format('d M Y') }}
                </p>
            </div>

        </div>

        <div class="mt-6 pt-6 border-t">

            <p class="text-sm text-gray-500">
                Address
            </p>

            <p class="font-semibold text-gray-800 mt-1">
                {{ $teacher->address ?? '-' }}
            </p>

        </div>

        <div class="flex justify-end mt-8 pt-6 border-t">

            <a
                href="{{ route('teachers.edit', $teacher) }}"
                class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
            >
                Edit Teacher
            </a>

        </div>

    </div>

</div>