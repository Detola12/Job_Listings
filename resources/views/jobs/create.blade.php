<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="$85,000 USD"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://google.com"></x-forms.input>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider/>

        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="Frontend, Backend, Manager "></x-forms.input>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
