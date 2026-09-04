<div>
    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Students
                </h1>
                <p class="text-gray-500 mt-1">
                    Manage all students in the school.
                </p>
            </div>

            <a
                href="{{ route('students.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium text-sm transition-all"
            >
                + Add Student
            </a>
        </div>

        @if (session()->has('success'))
            <div class="mb-6 rounded-lg bg-green-100 px-4 py-3 text-green-700 text-sm font-medium">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-6">
            <input
                type="text"
                wire:model.live="search"
                placeholder="Search by Student ID, Name, or Phone..."
                class="w-full md:w-96 border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-slate-700 font-semibold border-b">
                    <tr>
                        <th class="px-6 py-4 text-left">Student ID</th>
                        <th class="px-6 py-4 text-left">Name</th>
                        <th class="px-6 py-4 text-left">Gender</th>
                        <th class="px-6 py-4 text-left">Phone</th>
                        <th class="px-6 py-4 text-left">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">
                    @forelse($students as $student)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-6 py-4 font-mono text-slate-800">
                                {{ $student->student_id }}
                            </td>
                            <td class="px-6 py-4 font-medium text-slate-900">
                                {{ $student->first_name }} {{ $student->last_name }}
                            </td>
                            <td class="px-6 py-4 text-slate-600 capitalize">
                                {{ $student->gender }}
                            </td>
                            <td class="px-6 py-4 text-slate-600">
                                {{ $student->phone ?? '-' }}
                            </td>
                            <td class="px-6 py-4 font-medium">
                                <a
                                    href="{{ route('students.show', $student) }}"
                                    class="text-green-600 hover:underline mr-3"
                                >
                                    View
                                </a>
                                <a
                                    href="{{ route('students.edit', $student) }}"
                                    class="text-blue-600 hover:text-blue-800 mr-3"
                                >
                                    Edit
                                </a>
                                <button
                                    wire:click="delete({{ $student->id }})"
                                    wire:confirm="Are you sure you want to delete this student?"
                                    class="text-red-600 hover:text-red-800 cursor-pointer"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                No students found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $students->links() }}
        </div>

    </div>
</div>