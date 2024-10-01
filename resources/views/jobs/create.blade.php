<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method='POST' action='/jobs'>
        <x-forms.input label='Title' name='title' placeholder='CEO' />
        <x-forms.input label='Salary' name='salary' placeholder='$90,000 USD' />
        <x-forms.input label='Location' name='location' placeholder='London' />

        <x-forms.select label='Shedule' name='schedule'>
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label='URL' name='url' placeholder='company.com' />
        <x-forms.checkbox label='Featured (Costs Extra)' name='featured' />

        <x-forms.divider />

        <x-forms.input label='Tags(comma seperated)' name='tags' placeholder='(Frontend, Android, ...)' />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>
