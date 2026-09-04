<div class="max-w-4xl mx-auto">

    {{-- Back Button --}}
    <div class="mb-6">
        <a
            href="{{ route('students.index') }}"
            class="text-blue-600 hover:underline"
        >
            ← Back to Students
        </a>
    </div>


    {{-- Page Title --}}
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            Student Details
        </h1>

        <p class="text-gray-500 mt-1">
            View student information.
        </p>
    </div>


    {{-- Student Information --}}
    <div class="bg-white rounded-xl shadow-sm p-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <p class="text-sm text-gray-500">
                    Student ID
                </p>

                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student->student_id }}
                </p>
            </div>


            <div>
                <p class="text-sm text-gray-500">
                    Full Name
                </p>

                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student->first_name }}
                    {{ $student->last_name }}
                </p>
            </div>


            <div>
                <p class="text-sm text-gray-500">
                    Gender
                </p>

                <p class="font-semibold text-gray-800 mt-1">
                    {{ ucfirst($student->gender) }}
                </p>
            </div>


            <div>
                <p class="text-sm text-gray-500">
                    Date of Birth
                </p>

                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student->date_of_birth ?? '-' }}
                </p>
            </div>


            <div>
                <p class="text-sm text-gray-500">
                    Phone
                </p>

                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student->phone ?? '-' }}
                </p>
            </div>


            <div>
                <p class="text-sm text-gray-500">
                    Created At
                </p>

                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student->created_at->format('d M Y') }}
                </p>
            </div>

        </div>


        {{-- Address --}}
        <div class="mt-6 pt-6 border-t">

            <p class="text-sm text-gray-500">
                Address
            </p>

            <p class="font-semibold text-gray-800 mt-1">
                {{ $student->address ?? '-' }}
            </p>

        </div>


        {{-- Actions --}}
        <div class="flex justify-end mt-8 pt-6 border-t">

            <a
                href="{{ route('students.edit', $student) }}"
                class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
            >
                Edit Student
            </a>

        </div>

    </div>

</div>