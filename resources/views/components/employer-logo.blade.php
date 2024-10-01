@props(['employer', 'width' => 80])

@php
    $imagePath = '/storage/' . $employer->logo;
    $imageExists = file_exists(public_path($imagePath));
    $imageUrl = $imageExists ? asset($imagePath) : 'http://picsum.photos/seed/' . Str::random(1000) . '/' . $width . '/' . $width;
@endphp

<img src="{{$imageUrl}}" alt="" class="rounded-lg" width="{{ $width }}"
    height="{{ $width }}">
