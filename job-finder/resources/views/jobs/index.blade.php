<x-layout>
    <x-breadcrums class="mb-4" :links="['Jobs' => route('jobs.index')]" />
    <x-card class="mb-4 text-sm">
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>
                <div class="mb-1 font-semibold">Search</div>
                <x-text-input name="search" value="" placeholder="Search for any text" />
            </div>
            <div>
                <div class="mb-1 font-semibold">Salary</div>

                <div class="flex space-x-2">
                    <x-text-input name="min_salary" value="" placeholder="From" />
                    <x-text-input name="max_salary" value="" placeholder="To" />
                </div>
            </div>
            <div>3</div>
            <div>4</div>
        </div>
    </x-card>
    <div class="div">
        @foreach ($jobs as $job)
            <x-job-card class="mb-4" :$job>
                <div>
                    <a href="{{ route('jobs.show', $job) }}"
                        class="text-white text-sm bg-gray-400 px-4 py-2 rounded-md hover:bg-black">View Details</a>
                </div>
            </x-job-card>
        @endforeach
    </div>
</x-layout>
