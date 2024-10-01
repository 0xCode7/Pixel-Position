<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h3 class="font-bold text-4xl">Let's Find You A Great Job</h3>
{{--
            <form action="" class="mt-6">
                <input type="text" placeholder="i'm looking for..."
                    class="rounded-xl bg-white/10 border border-white/10 px-5 py-3 w-full max-w-xl">
            </form> --}}
            <x-forms.form action='/search'>
                <x-forms.input :label="false" name='q' placeholder='Web Developer...' />
            </x-forms.form>
        </section>

        <section class="top__Jobs pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="section__Items grid lg:grid-cols-3 gap-8 mt-6">

                @foreach ($featuredJobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="my-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job></x-job-card-wide>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
