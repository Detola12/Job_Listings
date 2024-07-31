@props(['job'])

<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 transition-colors duration-500 group">

    <div class="flex justify-between text-sm">
        <p>{{ $job->employer->name }}</p>
        @can('update', $job)
            <a href="{{ route('job.edit', $job->id) }}" class="text-[15px] hover:text-blue-600 transition-colors duration-300 font-extrabold">Edit</a>

        @endcan
    </div>
    <div class="py-8">
        <a href="{{ $job->url }}">
            <h3 class="font-bold group-hover:text-blue-600 transition-colors duration-500 text-xl"> {{ $job->title }}</h3>
        </a>
        <p class="text-sm my-3 text-gray-600">{{ $job->schedule }} <span class="text-sm"> -- {{ $job->location }}</span></p>
        <p class="text-sm">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small">Backend</x-tag>

            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer"  :width="42"/>

    </div>
</div>
