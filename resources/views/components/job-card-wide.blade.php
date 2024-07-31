@props(['job'])

<div class="p-4 bg-white/5 rounded-xl flex gap-6 border border-transparent hover:border-blue-800 transition-colors duration-500 group">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <a href="{{ $job->url }}">
            <h3 class="font-bold text-xl mt-2 group-hover:text-blue-600 transition-colors duration-500">{{ $job->title }}</h3>
        </a>
        <p class="text-xs text-gray-600">{{ $job->location }}</p>
        <p class="text-gray-400 text-sm mt-auto">{{ $job->salary }}</p>

    </div>
    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag></x-tag>
        @endforeach
    </div>

</div>
