<x-layout>
        <x-card class="mb-4">
                <div class="flex  justify-between">
                    <div>
                        {{ $job->title }}
                    </div>
                    <div class="text-sm">
                        ₦{{ number_format($job->salary) }}
                    </div>
                </div>
                <div class="flex text-xs justify-between items-center mb-4">

                    <div class="flex space-x-2">
                        <p>Company:</p>

                        {{ $job->company }}
                    </div>
                    <div class="flex space-x-2">
                        <div class="border p-1 rounded-md">{{ $job->category }}</div>
                        <div class="border p-1 rounded-md"> {{ $job->experience }}</div>

                    </div>
                </div>
                {{-- <p class="text-sm">{!!Str::limit($job->description, 300)!!}</p> --}}
                <p class="text-sm mb-4""> {!! nl2br(e($job->description)) !!}</p>

            </x-card>

</x-layout>
