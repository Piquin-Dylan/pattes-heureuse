@props([
    'option1',
    'option2',
    'option3' => null,
    'option4'=>null,
])


<select class="w-56 bg-white p-4 rounded-2xl">
    <option>{{$option1}}</option>
    <option>{{$option2}}</option>
</select>
