<div class="max-w-4xl mx-auto">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Edit Exam
            </h1>
            <p class="text-gray-500 mt-1">
                Update details for {{ $exam->name }} ({{ $exam->exam_code }}).
            </p>
        </div>

        <a
            href="{{ route('exams.index') }}"
            class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 font-medium text-sm transition-all"
        >
            ← Back to Exams
        </a>
    </div>

    {{-- Card Form --}}
    <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 sm:p-8">
        <form wire:submit="update" class="space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Exam Code --}}
                <div>
                    <label for="exam_code" class="block text-sm font-semibold text-slate-700 mb-1">
                        Exam Code <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="exam_code"
                        wire:model="exam_code"
                        placeholder="e.g. EXAM-2026-M1"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('exam_code')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Exam Name --}}
                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-700 mb-1">
                        Exam Name <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="name"
                        wire:model="name"
                        placeholder="e.g. Midterm Examination 2026"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('name')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Exam Type --}}
                <div>
                    <label for="exam_type" class="block text-sm font-semibold text-slate-700 mb-1">
                        Exam Type <span class="text-red-500">*</span>
                    </label>
                    <select
                        id="exam_type"
                        wire:model="exam_type"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    >
                        <option value="midterm">Midterm</option>
                        <option value="final">Final</option>
                        <option value="quiz">Quiz</option>
                        <option value="other">Other</option>
                    </select>
                    @error('exam_type')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Academic Year --}}
                <div>
                    <label for="academic_year" class="block text-sm font-semibold text-slate-700 mb-1">
                        Academic Year <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="academic_year"
                        wire:model="academic_year"
                        placeholder="e.g. 2025-2026"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @error('academic_year')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Start Date --}}
                <div>
                    <label for="start_date" class="block text-sm font-semibold text-slate-700 mb-1">
                        Start Date <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="date"
                        id="start_date"
                        wire:model="start_date"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    >
                    @error('start_date')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>

                {{-- End Date --}}
                <div>
                    <label for="end_date" class="block text-sm font-semibold text-slate-700 mb-1">
                        End Date
                    </label>
                    <input
                        type="date"
                        id="end_date"
                        wire:model="end_date"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                    >
                    @error('end_date')
                        <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            {{-- Description --}}
            <div>
                <label for="description" class="block text-sm font-semibold text-slate-700 mb-1">
                    Description / Instructions
                </label>
                <textarea
                    id="description"
                    wire:model="description"
                    rows="3"
                    placeholder="General exam notes, guidelines, or instructions..."
                    class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                ></textarea>
                @error('description')
                    <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
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
                    <option value="upcoming">Upcoming</option>
                    <option value="ongoing">Ongoing</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
                @error('status')
                    <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="flex items-center justify-end gap-3 border-t border-slate-100 pt-6">
                <a
                    href="{{ route('exams.index') }}"
                    class="px-5 py-2.5 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 font-medium text-sm transition-all"
                >
                    Cancel
                </a>
                <button
                    type="submit"
                    class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold text-sm transition-all shadow-sm cursor-pointer"
                >
                    Update Exam
                </button>
            </div>

        </form>
    </div>
</div>
