<x-layout>
    <x-page-heading>Edit Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="$85,000 USD"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"></x-forms.input>

    </x-forms.form>
</x-layout>
