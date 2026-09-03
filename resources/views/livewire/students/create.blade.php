<x-layouts.dashboard title="Add Student">

    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <a
                href="{{ route('students.index') }}"
                class="text-blue-600 hover:underline"
            >
                ← Back to Students
            </a>

            <h1 class="text-3xl font-bold text-gray-800 mt-4">
                Add Student
            </h1>

            <p class="text-gray-500 mt-1">
                Create a new student profile.
            </p>
        </div>


        <div class="bg-white rounded-xl shadow-sm p-6">

            <form wire:submit="save">

                {{-- Student ID --}}
                <div class="mb-5">

                    <label class="block font-medium text-gray-700 mb-2">
                        Student ID
                    </label>

                    <input
                        type="text"
                        wire:model="student_id"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        placeholder="Example: STU001"
                    >

                    @error('student_id')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Name --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>

                        <label class="block font-medium text-gray-700 mb-2">
                            First Name
                        </label>

                        <input
                            type="text"
                            wire:model="first_name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        >

                        @error('first_name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <div>

                        <label class="block font-medium text-gray-700 mb-2">
                            Last Name
                        </label>

                        <input
                            type="text"
                            wire:model="last_name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        >

                        @error('last_name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                </div>


                {{-- Gender --}}
                <div class="mt-5">

                    <label class="block font-medium text-gray-700 mb-2">
                        Gender
                    </label>

                    <select
                        wire:model="gender"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                    >
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    @error('gender')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Date of Birth --}}
                <div class="mt-5">

                    <label class="block font-medium text-gray-700 mb-2">
                        Date of Birth
                    </label>

                    <input
                        type="date"
                        wire:model="date_of_birth"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                    >

                </div>


                {{-- Phone --}}
                <div class="mt-5">

                    <label class="block font-medium text-gray-700 mb-2">
                        Phone
                    </label>

                    <input
                        type="text"
                        wire:model="phone"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        placeholder="Example: 012345678"
                    >

                </div>


                {{-- Address --}}
                <div class="mt-5">

                    <label class="block font-medium text-gray-700 mb-2">
                        Address
                    </label>

                    <textarea
                        wire:model="address"
                        rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                    ></textarea>

                </div>


                {{-- Buttons --}}
                <div class="flex justify-end gap-4 mt-6">

                    <a
                        href="{{ route('students.index') }}"
                        class="px-5 py-2 border border-gray-300 rounded-lg"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
                    >
                        Save Student
                    </button>

                </div>

            </form>

        </div>

    </div>

</x-layouts.dashboard>