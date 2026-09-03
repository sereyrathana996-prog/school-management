<x-layouts.dashboard title="Students">
    <div class="max-w-7xl mx-auto p-6">

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
                href="#"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
            >
                + Add Student
            </a>

        </div>


        <div class="bg-white rounded-xl shadow-sm overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-50">

                    <tr>
                        <th class="px-6 py-4 text-left">
                            Student ID
                        </th>

                        <th class="px-6 py-4 text-left">
                            Name
                        </th>

                        <th class="px-6 py-4 text-left">
                            Gender
                        </th>

                        <th class="px-6 py-4 text-left">
                            Phone
                        </th>

                        <th class="px-6 py-4 text-left">
                            Action
                        </th>
                    </tr>

                </thead>


                <tbody>

                    @forelse($students as $student)

                        <tr class="border-t">

                            <td class="px-6 py-4">
                                {{ $student->student_id }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $student->first_name }}
                                {{ $student->last_name }}
                            </td>

                            <td class="px-6 py-4">
                                {{ ucfirst($student->gender) }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $student->phone ?? '-' }}
                            </td>

                            <td class="px-6 py-4">

                                <button class="text-blue-600">
                                    Edit
                                </button>

                                <button class="text-red-600 ml-3">
                                    Delete
                                </button>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="5"
                                class="px-6 py-8 text-center text-gray-500"
                            >
                                No students found.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-layouts.dashboard>