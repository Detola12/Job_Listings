@if(empty($jobs))
    <x-layout>
        <div class="space-y-10">
            <section class="text-center pt-6">
                <h1 class="font-bold text-4xl">Let's Find your next Job</h1>

                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label="false" name="q" placeholder="Web Developer..."></x-forms.input>
                </x-forms.form>
            </section>

            <section class="pt-10">
                <x-section-heading>Featured Jobs</x-section-heading>
                <div class="grid lg:grid-cols-3 gap-8 mt-6">

                </div>
            </section>

            <section>
                <x-section-heading>Tags</x-section-heading>
                <div class="mt-6 space-x-1">

                </div>
            </section>

            <section>
                <x-section-heading>Recent Jobs</x-section-heading>
                <div class="mt-6 space-y-6">

                </div>
            </section>
        </div>

    </x-layout>
@else
    <x-layout>
        <div class="space-y-10">
            <section class="text-center pt-6">
                <h1 class="font-bold text-4xl">Let's Find your next Job</h1>

                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label="false" name="q" placeholder="Web Developer..."></x-forms.input>
                </x-forms.form>
            </section>

            <section class="pt-10">
                <x-section-heading>Featured Jobs</x-section-heading>
                <div class="grid lg:grid-cols-3 gap-8 mt-6">
                    @if($featured_jobs)
                        @foreach($featured_jobs as $job)
                            <x-job-card :$job></x-job-card>
                        @endforeach
                    @endif
                </div>
            </section>

            <section>
                <x-section-heading>Tags</x-section-heading>
                <div class="mt-6 space-x-1">
                    @foreach($tags as $tag)
                        <x-tag :$tag></x-tag>
                    @endforeach
                </div>
            </section>

            <section>
                <x-section-heading>Recent Jobs</x-section-heading>
                <div class="mt-6 space-y-6">
                    @if($jobs)
                        @foreach($jobs as $job)
                            <x-job-card-wide :$job></x-job-card-wide>
                        @endforeach
                    @endif
                </div>
            </section>
        </div>

    </x-layout>
@endif
