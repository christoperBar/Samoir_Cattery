@extends('template.template')

@section('layout_content')

<div class=" px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        @foreach ($rases as $index => $ras)
        @if ($ras->id == $active)
            <li class="mr-2">
                <a href="/collection/{{ $ras->id }}" class="inline-block px-4 py-3 text-white bg-secondary rounded-lg active" aria-current="page">{{ $ras->ras_name }}</a>
            </li>
    
        @else
        <li class="mr-2">
            <a href="/collection/{{ $ras->id }}" class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">{{ $ras->ras_name }}</a>
        </li>
        @endif
        
        @endforeach
    </ul>
</div>

<div class="px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20 gap-x-10 gap-y-20 lg:px-8 flex flex-wrap ">
    @foreach ($cats as $index => $cat)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-t-lg" src="{{ $cat->cat_photo }}" alt="" />
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $cat->cat_name }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Birthday: {{ $cat->birthday }}</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">Color: {{ $cat->color }}</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">Ras: {{ $cat->ras->ras_name }}</p>
        </div>
    </div>
    @endforeach
</div>



@endsection