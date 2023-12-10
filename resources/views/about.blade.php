@extends('template.template')

@section('layout_content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">About Us</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600"> Samoir Cattery adalah cattery yang terkemuka dan berdedikasi
                    dalam pembiakan kucing ras British-Scottish Fold/Straight. Kami bangga dengan komitmen kami untuk
                    membiakkan dan mempromosikan kucing-kucing indah ini sambil memastikan kesejahteraan dan kesehatan
                    mereka.</p>
            </div>
            <div class="max-h-72 max-w-2xl">
                <img class="h-full w-full rounded-lg object-cover drop-shadow-lg" src="https://i.imgur.com/MuikBro.jpeg"
                    alt="image description">
            </div>
        </div>
    </div>

    <div class="bg-right bg-no-repeat bg-cover bg-[url('https://i.imgur.com/UDV61qq.png')] py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div class="max-h-96 max-w-2xl">
                <img class="h-full w-full rounded-lg object-cover drop-shadow-lg" src="https://i.imgur.com/2D8hsDU.jpeg"
                    alt="image description">
            </div>
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Mission</h2>
                <p class="mt-6 text-lg leading-8 text-gray-100"> Di Samoir Cattery, misi kami adalah menyediakan perawatan
                    terbaik dan praktik pembiakan untuk kucing ras British-Scottish Fold/Straight. Kami berkomitmen untuk
                    menjaga standar tertinggi dalam industri ini, memastikan kesehatan, kebahagiaan, dan kesejahteraan
                    kucing-kucing kami. Kami bertujuan untuk menghubungkan para pecinta kucing dengan ras yang unik dan
                    menawan ini melalui kehadiran media sosial kami dan keterlibatan dalam komunitas.</p>
            </div>

        </div>
    </div>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="mx-auto mb-10 lg:max-w-xl sm:text-center">
            <h2 class="mb-6 text-3xl font-bold">
                Meet the team
            </h2>

            {{-- admin --}}
            <a href="/addteamform"
                class="flex items-center justify-center text-white bg-secondary hover:bg-primary focus:ring-4 focus:ring-primary font-medium rounded-lg text-sm px-4 py-2 dark:bg-secondary dark:hover:bg-primary focus:outline-none dark:focus:ring-primary">
                <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Add Team
            </a>

        </div>
        

        <div class="grid gap-10 mx-auto lg:grid-cols-2 lg:max-w-screen-lg">
            @foreach ($teams as $index => $team)
                <div class="grid sm:grid-cols-3">
                    <div class="relative w-full h-48 max-h-full rounded shadow sm:h-auto">
                        <img class="absolute object-cover w-full h-full rounded"
                            src="{{ $team->photo }}?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                            alt="Person" />
                    </div>
                    <div class="flex flex-col justify-center mt-5 sm:mt-0 sm:p-5 sm:col-span-2">
                        <p class="text-lg font-bold">{{ $team->name }}</p>
                        <p class="mb-4 text-xs text-gray-800">{{ $team->email }}</p>
                        <p class="mb-4 text-sm tracking-wide text-gray-800">
                            {{ $team->description }}
                        </p>
                        <div class="flex items-center space-x-3">
                            @if ($team->instagram)
                                <a href="https://www.instagram.com/{{ $team->instagram }}/"
                                    class="text-gray-500 hover:text-secondary dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </svg>
                                    <span class="sr-only">Instagram page</span>
                                </a>
                            @endif

                            @if ($team->tiktok)
                                <a href="https://www.tiktok.com/@{{ $team->tiktok }}"
                                    class="text-gray-500 hover:text-secondary dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">

                                        <path fill="currentColor"
                                            d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                                    </svg>
                                    <span class="sr-only">Tiktok page</span>
                                </a>
                            @endif


                        </div>
                        {{-- Admin --}}
                        <div class="flex flex-col sm:flex-row pt-2 pb-6 ">
                            <a href="/updateteamform/{{ $team->id }}"
                                class="inline-flex items-center px-3 py-2 mx-1 my-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd" />
                                </svg>
                                Edit
                            </a>
                            <form action="/deleteteam/{{ $team->id }}" method="POST"
                                class="inline-flex items-center px-3 py-2 mx-1 my-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none">
                                @csrf
                                @method('DELETE')
                                <button class="w-full h-fit flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class=" bg-center bg-no-repeat bg-cover bg-[url('https://i.imgur.com/S7Pi6kM.png')] py-24 sm:py-24">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center">Certification</h2>
        <br>
        <div class="mx-auto max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 flex justify-center ">

            <div
                class="max-w-sm p-6  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 drop-shadow-lg        ">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/World_Cat_Federation_logo.png/225px-World_Cat_Federation_logo.png"
                    class="h-9 mr-3" alt="Flowbite Logo" />
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">World Cat
                        Federation</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Terdaftar di World Cat Federation (WCF)
                </p>
                <a href="https://www.icc-wcf.org/" class="inline-flex items-center text-blue-600 hover:underline">
                    Learn more...
                    <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </div>

            <div
                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 drop-shadow-lg        ">
                <img src="https://upload.wikimedia.org/wikipedia/id/5/52/Logo_CatFanciers%27Association.jpg"
                    class="h-9 mr-3" alt="Flowbite Logo" />
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Cat Fancier's
                        Association</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Terdaftar di Cat Fancier's Association (CFA)
                </p>
                <a href="https://cfa.org/kids/breeds-and-colors/cfa-breeds/"
                    class="inline-flex items-center text-blue-600 hover:underline">
                    Learn more...
                    <svg class="w-3 h-3 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
