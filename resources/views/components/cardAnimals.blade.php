
@props([
    'image',
    'name',
    'sexe',
    'age',
    'cta',
])
<div class="flex flex-col items-center gap-4 pt-4 lg:flex-row lg:pl-5">
    <div class=" p-6 bg-white rounded-2xl flex gap-4 flex-col items-center">
        <img src="{{$image}}" alt="">
        <span  class="text-2xl font-bold ">{{$name}}</span>
        <div class="flex gap-5 justify-center">
            <span>{{$sexe}}</span>
            <span>{{$age}}</span>
        </div>
        <x-button link="{{route('client.descriptionAnimal')}}" class="cta3">{{$cta}}</x-button>
    </div>
</div>
