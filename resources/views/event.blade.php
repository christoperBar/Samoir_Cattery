@extends('template.template')

@section('layout_content')
<div class=" px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20">
    <h3 class="my-10 text-3xl font-bold dark:text-white">Our Events</h3>
    

    <div class="flex flex-col space-y-4 sm:flex-col pb-6 ">
        
        <a href="/addevent"
            class="flex items-center justify-center text-white bg-secondary hover:bg-primary focus:ring-4 focus:ring-primary font-medium rounded-lg text-sm px-4 py-2 dark:bg-secondary dark:hover:bg-primary focus:outline-none dark:focus:ring-primary">
            <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Add Events
        </a>
    </div>

    <form class="mb-10">   
        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

    @foreach ($events as $event)
    <div class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="flex flex-col sm:flex-row ">
            <img class="rounded-t-lg h-60 w-96 object-cover" src="{{ $event->event_photo }}" alt="Card Image">
            <div class="w-2/3 p-4">
                <div class="flex flex-row items-center">
                    <h2 class="text-2xl font-bold mb-2 pr-4">{{ $event->event_name }}</h2>
                    <p class="text-gray-400 text-sm">{{ $event->location }}</p>
                </div>
                <div class="flex items-center text-sm mb-2 text-gray-500">
                    @if ($event->status == 'on going')
                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> On-going
                    @elseif ($event->status == 'accomplished')
                    <div class="h-2.5 w-2.5 rounded-full bg-gray-400 me-2"></div> Accomplished
                    @elseif ($event->status == 'coming soon')
                    <div class="h-2.5 w-2.5 rounded-full bg-yellow-200 me-2"></div> Coming Soon
                    @endif
                </div>
                
                <p class="text-gray-600">{{ $event->descriptions }}</p>
                <br>
                <p class="text-gray-400 text-sm">{{ $event->time }}</p>

            </div>
        </div>
    </div>
    @endforeach
    
    
    
</div>

@endsection

