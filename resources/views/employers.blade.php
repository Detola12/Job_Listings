<x-layout>
    <x-page-heading>Companies</x-page-heading>

    <div class="space-y-6">
        @foreach($employers as $employer)
            <x-employer-card :$employer></x-employer-card>
        @endforeach
    </div>
</x-layout>


