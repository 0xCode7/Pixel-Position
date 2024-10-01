@props(['job'])
<x-panel class="gap-6">
    <div class="job__Image">
        <x-employer-logo :employer="$job->employer"/>
    </div>

    <div class="job__Details flex-1 flex flex-col">
        <a href="#" class="job__Employee self-start text-sm text-gray-400"> {{ $job->employer->name }}
        </a>

        <h3 class="job__Title font-bold group-hover:text-navhover transition-all duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="job__salary text-sm text-gray-400 mt-auto">
            {{ $job->schedule }} - From <span class="text-green-500">{{ $job->salary }}</span>
        </p>
    </div>
    <div class="tags flex justify-between">

        <div>

            @foreach ($job->tags as $tag)
                <x-tag :$tag>{{ $tag }}</x-tag>
            @endforeach
        </div>

    </div>
</x-panel>
