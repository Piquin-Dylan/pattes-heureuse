@props([
    'img',
    'content',

])

<div class="pl-5  flex flex-col items-center gap-4 pt-4 lg:flex-row">
    <div class="bg-regal-orange  p-6  rounded-2xl flex gap-4 flex-col items-center">
        <img src="{{$img}}" alt="">
        <span  class=" text-white font-bold">{{$content}}</span>
    </div>
</div>
