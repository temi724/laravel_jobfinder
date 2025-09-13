    <div {{ $attributes->class(['bg-white p-3 rounded-lg shadow-md ']) }}>
        {{ $slot }}
        {{-- <p class="text-gray-600">{{ $job->company }} - {{ $job->location }}</p>
        <p class="mt-2">{{ Str::limit($job->description, 100) }}</p> --}}
        {{-- <a href="#" class="text-blue-500 hover:underline mt-2 inline-block">View Details</a> --}}
    </div>
