<div>
    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <a
                href="{{ route('classes.index') }}"
                class="text-purple-600 hover:underline text-sm font-medium"
            >
                ← Back to Classes
            </a>

            <h1 class="text-3xl font-bold text-gray-800 mt-3">
                Edit Class
            </h1>

            <p class="text-gray-500 mt-1">
                Update class details, grade level, and status.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <form wire:submit="update">

                {{-- Class Code & Name --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Class Code <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            wire:model="class_code"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                        @error('class_code')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Class Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            wire:model="name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Grade Level & Section --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Grade Level <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            wire:model="grade_level"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                        @error('grade_level')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Section
                        </label>
                        <input
                            type="text"
                            wire:model="section"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                        @error('section')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Academic Year & Room --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Academic Year <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            wire:model="academic_year"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                        @error('academic_year')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Room / Location
                        </label>
                        <input
                            type="text"
                            wire:model="room"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                        @error('room')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Capacity & Status --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Capacity <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="number"
                            wire:model="capacity"
                            min="1"
                            max="200"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                        @error('capacity')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700 text-sm mb-1">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select
                            wire:model="status"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        >
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        @error('status')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="flex justify-end gap-3 pt-4 border-t">
                    <a
                        href="{{ route('classes.index') }}"
                        class="px-5 py-2 border border-gray-300 rounded-lg text-slate-700 hover:bg-slate-50 text-sm font-medium transition-all"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 text-sm font-medium transition-all cursor-pointer"
                    >
                        Update Class
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
