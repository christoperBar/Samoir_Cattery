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
                <img class="h-full w-full rounded-lg object-cover drop-shadow-lg"
                    src="https://scontent.fsub16-1.fna.fbcdn.net/v/t39.30808-6/367495419_2016010965427483_2736525643115593352_n.jpg?stp=cp6_dst-jpg&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=VtSysCpXP-sAX_k-2OE&_nc_ht=scontent.fsub16-1.fna&oh=00_AfBLd1Lx-ElIW66uHB27mx4v9n4WRXjn_PkjsQnr-sVEYA&oe=6547A969"
                    alt="image description">
            </div>
        </div>
    </div>

    <div class="bg-right bg-no-repeat bg-cover bg-[url('https://i.imgur.com/UDV61qq.png')] py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div class="max-h-96 max-w-2xl">
                <img class="h-full w-full rounded-lg object-cover drop-shadow-lg"
                    src="https://scontent.fsub16-1.fna.fbcdn.net/v/t39.30808-6/293576047_1730831777278738_4312544913109303852_n.jpg?stp=cp6_dst-jpg&_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGBdcgPAWGUSjjlhTm01lZRQ47EdnG-lWhDjsR2cb6VaPgdJIvGS1cRQ9NzdvktnBShfhxYP1cZ5nQwlTa9Jd2f&_nc_ohc=8Z8onKNGQ_gAX-BeyUy&_nc_ht=scontent.fsub16-1.fna&oh=00_AfD0r-bqWAzEbZkDoTM1fDTwvBvxjudsEJKFkpILv6fIaA&oe=65473140"
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
