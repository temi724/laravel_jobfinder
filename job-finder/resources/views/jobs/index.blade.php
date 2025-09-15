<x-layout>
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
