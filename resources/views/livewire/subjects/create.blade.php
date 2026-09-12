<div class="max-w-4xl mx-auto">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Create Subject
            </h1>
            <p class="text-gray-500 mt-1">
                Add a new subject to the curriculum.
            </p>
        </div>

        <a
            href="{{ route('subjects.index') }}"
            class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 font-medium text-sm transition-all"
        >
            ← Back to Subjects
        </a>
    </div>

    {{-- Card Form --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 sm:p-8">
        <form wire:submit="save" class="space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Subject Code --}}
                <div>
                    <label for="subject_code" class="block text-sm font-semibold text-slate-700 mb-1">
                        Subject Code <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="subject_code"
                        wire:model="subject_code"
                        placeholder="e.g. MATH101, ENG201"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('subject_code')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Subject Name --}}
                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-700 mb-1">
                        Subject Name <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="name"
                        wire:model="name"
                        placeholder="e.g. Mathematics 10"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('name')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Grade Level --}}
                <div>
                    <label for="grade_level" class="block text-sm font-semibold text-slate-700 mb-1">
                        Grade Level
                    </label>
                    <input
                        type="text"
                        id="grade_level"
                        wire:model="grade_level"
                        placeholder="e.g. Grade 10, High School"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('grade_level')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Credit Hours --}}
                <div>
                    <label for="credit_hours" class="block text-sm font-semibold text-slate-700 mb-1">
                        Credit Hours <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="number"
                        id="credit_hours"
                        wire:model="credit_hours"
                        min="1"
                        max="10"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('credit_hours')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            {{-- Description --}}
            <div>
                <label for="description" class="block text-sm font-semibold text-slate-700 mb-1">
                    Description
                </label>
                <textarea
                    id="description"
                    wire:model="description"
                    rows="3"
                    placeholder="Brief description of the subject course content..."
                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                ></textarea>
                @error('description')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            {{-- Status --}}
            <div>
                <label for="status" class="block text-sm font-semibold text-slate-700 mb-1">
                    Status <span class="text-red-500">*</span>
                </label>
                <select
                    id="status"
                    wire:model="status"
                    class="w-full md:w-64 border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                >
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                @error('status')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="flex items-center justify-end gap-3 border-t border-slate-100 pt-6">
                <a
                    href="{{ route('subjects.index') }}"
                    class="px-5 py-2.5 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 font-medium text-sm transition-all"
                >
                    Cancel
                </a>
                <button
                    type="submit"
                    class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold text-sm transition-all shadow-sm cursor-pointer"
                >
                    Save Subject
                </button>
            </div>

        </form>
    </div>
</div>
