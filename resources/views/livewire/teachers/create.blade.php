<div class="max-w-4xl mx-auto">

    {{-- Header --}}
    <div class="mb-6">

        <a
            href="{{ route('teachers.index') }}"
            class="text-blue-600 hover:underline"
        >
            ← Back to Teachers
        </a>

        <h1 class="text-3xl font-bold text-gray-800 mt-4">
            Add Teacher
        </h1>

        <p class="text-gray-500 mt-1">
            Add a new teacher to the school.
        </p>

    </div>


    {{-- Form --}}
    <div class="bg-white rounded-xl shadow-sm p-6">

        <form wire:submit="save">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Teacher ID --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Teacher ID
                    </label>

                    <input
                        type="text"
                        wire:model="teacher_id"
                        placeholder="e.g. TCH001"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                    @error('teacher_id')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- First Name --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        First Name
                    </label>

                    <input
                        type="text"
                        wire:model="first_name"
                        placeholder="Enter first name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                    @error('first_name')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Last Name --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Last Name
                    </label>

                    <input
                        type="text"
                        wire:model="last_name"
                        placeholder="Enter last name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                    @error('last_name')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Gender --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Gender
                    </label>

                    <select
                        wire:model="gender"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >
                        <option value="">
                            Select gender
                        </option>

                        <option value="male">
                            Male
                        </option>

                        <option value="female">
                            Female
                        </option>

                    </select>

                    @error('gender')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Date of Birth --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Date of Birth
                    </label>

                    <input
                        type="date"
                        wire:model="date_of_birth"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                    @error('date_of_birth')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Phone --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Phone
                    </label>

                    <input
                        type="text"
                        wire:model="phone"
                        placeholder="e.g. 012345678"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Email --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        wire:model="email"
                        placeholder="teacher@example.com"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Specialization --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Specialization
                    </label>

                    <input
                        type="text"
                        wire:model="specialization"
                        placeholder="e.g. Mathematics"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                    @error('specialization')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>


            {{-- Address --}}
            <div class="mt-6">

                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Address
                </label>

                <textarea
                    wire:model="address"
                    rows="4"
                    placeholder="Enter teacher address"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                ></textarea>

                @error('address')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-8 pt-6 border-t">

                <a
                    href="{{ route('teachers.index') }}"
                    class="px-5 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    class="px-5 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 disabled:opacity-50"
                >
                    <span wire:loading.remove>
                        Save Teacher
                    </span>

                    <span wire:loading>
                        Saving...
                    </span>
                </button>

            </div>

        </form>

    </div>

</div>