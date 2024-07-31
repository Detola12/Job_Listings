<x-layout>
    <x-page-heading>Edit Job</x-page-heading>

    <x-forms.form method="POST" action="{{ route('job.update', $jobs->id) }}">
        <x-forms.input label="Title" name="title" placeholder="CEO" value="{{ $jobs->title }}"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="$85,000 USD" value="{{ $jobs->salary }}"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" value="{{ $jobs->location }}"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule" value="{{ $jobs->schedule }}">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" value="{{ $jobs->url }}" placeholder="https://google.com"></x-forms.input>
        <x-forms.checkbox label="Feature (Costs Extra)" value="" name="featured"></x-forms.checkbox>

        <x-forms.divider/>

{{--
        <x-forms.input label="Tags (Comma Separated)" value="{{ $jobs->tag }}" name="tags" placeholder="Frontend, Backend, Manager "></x-forms.input>
--}}

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
