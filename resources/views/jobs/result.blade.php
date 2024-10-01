<x-layout>
    <x-page-Heading>Results</x-page-Heading>
    <div class="space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
        @endforeach
    </div>
</x-layout>
