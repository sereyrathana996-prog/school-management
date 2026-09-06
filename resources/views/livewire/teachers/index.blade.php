<div>

    <div class="flex items-center justify-between mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Teachers
            </h1>

            <p class="text-gray-500 mt-1">
                Manage all teachers in the school.
            </p>
        </div>

        <a
            href="{{ route('teachers.create') }}"
            class="px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700"
        >
            + Add Teacher
        </a>

    </div>


    {{-- Search --}}

    <div class="mb-6">

        <input
            type="text"
            wire:model.live="search"
            placeholder="Search by Teacher ID, Name, Phone, or Email..."
            class="w-full md:w-96 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

    </div>


    {{-- Success Message --}}

    @if (session()->has('success'))

        <div class="mb-6 rounded-lg bg-green-100 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>

    @endif


    {{-- Teacher Table --}}

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">

        <table class="w-full">

            <thead>

                <tr class="border-b border-gray-300">

                    <th class="text-left px-6 py-4">
                        Teacher ID
                    </th>

                    <th class="text-left px-6 py-4">
                        Name
                    </th>

                    <th class="text-left px-6 py-4">
                        Gender
                    </th>

                    <th class="text-left px-6 py-4">
                        Phone
                    </th>

                    <th class="text-left px-6 py-4">
                        Specialization
                    </th>

                    <th class="text-left px-6 py-4">
                        Action
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse ($teachers as $teacher)

                    <tr class="border-b border-gray-100">

                        <td class="px-6 py-4">
                            {{ $teacher->teacher_id }}
                        </td>

                        <td class="px-6 py-4 font-medium">
                            {{ $teacher->first_name }}
                            {{ $teacher->last_name }}
                        </td>

                        <td class="px-6 py-4">
                            {{ ucfirst($teacher->gender) }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $teacher->phone ?? '-' }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $teacher->specialization ?? '-' }}
                        </td>

                        <td class="px-6 py-4">

                            <a
                                href="{{ route('teachers.show', $teacher) }}"
                                class="text-green-600 hover:underline mr-3"
                            >
                                View
                            </a>

                            <a
                                href="{{ route('teachers.edit', $teacher) }}"
                                class="text-blue-600 hover:underline mr-3"
                            >
                                Edit
                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="6"
                            class="text-center py-10 text-gray-500"
                        >
                            No teachers found.
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    {{-- Pagination --}}

    <div class="mt-6">
        {{ $teachers->links() }}
    </div>

</div>