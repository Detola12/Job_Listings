@props(['employer'])

@if($employer)
    <div class="p-4 bg-white/5 rounded-xl flex gap-6 border border-transparent hover:border-blue-800 transition-colors duration-500 group">
        <div>
            <x-employer-logo :employer="$employer"></x-employer-logo>
        </div>

        <div class="flex-1 flex flex-col pr-24">
            <a href="#" class="mx-auto items-center font-bold pt-6 text-4xl text-white">{{ $employer->name }}</a>
        </div>

    </div>

@endif
