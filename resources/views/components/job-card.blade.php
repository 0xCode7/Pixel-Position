{{-- @props(['job']) --}}
<x-panel class="flex-col text-center">
    <div class="job__Employee self-start text-sm">
        {{$job->employer->name}}
    </div>
    <div class="job__Details py-8 ">
        <h3 class="job__Title text-xl font-bold group-hover:text-navhover transition-all duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="job__salary mt-5 text-sm">
            {{$job->schedule}} - From <span class="text-green-500">{{$job->salary}}</span>
        </p>
    </div>
    <div class="tags flex justify-between items-center">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size='small'>{{ $tag }}</x-tag>
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width='42'/>

    </div>
</x-panel>
