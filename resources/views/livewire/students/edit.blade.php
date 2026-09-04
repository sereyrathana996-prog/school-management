<div>
    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <a
                href="{{ route('students.index') }}"
                class="text-blue-600 hover:underline text-sm font-medium"
            >
                ← Back to Students
            </a>

            <h1 class="text-3xl font-bold text-gray-800 mt-3">
                Edit Student
            </h1>

            <p class="text-gray-500 mt-1">
                Update student profile information.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <form wire:submit="update">

                {{-- Student ID --}}
                <div class="mb-5">
                    <label class="block font-medium text-gray-700 text-sm mb-1">
                        Student ID <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        wire:model="student_id"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('student_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Name --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            First Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            wire:model="first_name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                        @error('first_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Last Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            wire:model="last_name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                        @error('last_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Gender --}}
                <div class="mb-5">
                    <label class="block font-medium text-gray-700 text-sm mb-1">
                        Gender <span class="text-red-500">*</span>
                    </label>
                    <select
                        wire:model="gender"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Date of Birth --}}
                <div class="mb-5">
                    <label class="block font-medium text-gray-700 text-sm mb-1">
                        Date of Birth
                    </label>
                    <input
                        type="date"
                        wire:model="date_of_birth"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                {{-- Phone --}}
                <div class="mb-5">
                    <label class="block font-medium text-gray-700 text-sm mb-1">
                        Phone
                    </label>
                    <input
                        type="text"
                        wire:model="phone"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                {{-- Address --}}
                <div class="mb-6">
                    <label class="block font-medium text-gray-700 text-sm mb-1">
                        Address
                    </label>
                    <textarea
                        wire:model="address"
                        rows="3"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    ></textarea>
                </div>

                {{-- Buttons --}}
                <div class="flex justify-end gap-3 pt-4 border-t">
                    <a
                        href="{{ route('students.index') }}"
                        class="px-5 py-2 border border-gray-300 rounded-lg text-slate-700 hover:bg-slate-50 text-sm font-medium transition-all"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm font-medium transition-all cursor-pointer"
                    >
                        Update Student
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>