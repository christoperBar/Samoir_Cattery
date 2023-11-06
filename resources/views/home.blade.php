@extends('template.template')

@section('layout_content')
    <section
        class="bg-center bg-cover  bg-no-repeat bg-[url('https://i.imgur.com/VOlsmjz.png')] bg-secondary100 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-pink-100 md:text-5xl lg:text-6xl">Dunia
                Kucing</h1>
            <p class="mb-8 text-lg font-normal text-pink-100 lg:text-xl sm:px-16 lg:px-48">Setiap kucing adalah karya seni
                berjalan yang hidup di rumah Anda.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/collection"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-secondary hover:bg-primary   focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Our Collection

                </a>
                <a href="/why"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Why Samoir?
                </a>
            </div>
        </div>
    </section>
@endsection
