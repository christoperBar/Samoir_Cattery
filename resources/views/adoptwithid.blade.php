@extends('template.template')

@section('layout_content')
    <div class=" px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2">
                <a href="/adopt"
                    class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white"
                    aria-current="page">All</a>
            </li>
            @foreach ($rases as $index => $ras)
                @if ($ras->id == $active)
                    <li class="mr-2">
                        <a href="/adopt/{{ $ras->id }}"
                            class="inline-block px-4 py-3 text-white bg-secondary rounded-lg active"
                            aria-current="page">{{ $ras->ras_name }}</a>
                    </li>
                @else
                    <li class="mr-2">
                        <a href="/adopt/{{ $ras->id }}"
                            class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">{{ $ras->ras_name }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>


    {{-- admin --}}
    <div class="flex flex-col space-y-4 sm:flex-row sm:px-20 px-6 pt-2 pb-6">
        <a href="/addcatform"
            class="flex items-center justify-center text-white bg-secondary hover:bg-primary focus:ring-4 focus:ring-primary font-medium rounded-lg text-sm px-4 py-2 dark:bg-secondary dark:hover:bg-primary focus:outline-none dark:focus:ring-primary">
            <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Add Cat
        </a>
    </div>
    <br>

    <div class="px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20 gap-x-10 gap-y-20 lg:px-8 flex flex-wrap ">
        @foreach ($cats as $index => $cat)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg h-60 w-96 object-cover" src="{{ $cat->cat_photo }}" alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $cat->cat_name }}
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Birthday: {{ $cat->birthday }}</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Color: {{ $cat->color }}</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Ras: {{ $cat->ras->ras_name }}</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Maturity: {{ $cat->maturity }}</p>
                    <br>

                    <div class="flex flex-col sm:flex-row pt-2 pb-6 ">
                        <a href="#" class="inline-flex items-center px-3 py-2 mx-1 my-2 text-sm font-medium text-center text-white bg-secondary rounded-lg hover:bg-primary focus:ring-4 focus:outline-none">
                            Adopt Now
                        </a>

                        {{-- Admin --}}
                        <a href="/updatecatform/{{ $cat->id }}" class="inline-flex items-center px-3 py-2 mx-1 my-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            Edit
                        </a>
                       
                        <form action="/deletecat/{{$cat->id}}" method="POST" class="inline-flex items-center px-3 py-2 mx-1 my-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none">
                            @csrf 
                            @method("DELETE")
                            <button class="w-full h-fit flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                Delete
                            </button>
                        </form>


                    </div>
                    


                </div>
            </div>
        @endforeach
    </div>
@endsection
