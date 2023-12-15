@extends('template.template')

@section('layout_content')
    <br>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add new ras</h2>
            <form method="POST" action="/addras" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="ras_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Ras Name</label>
                        <input type="text" name="ras_name" id="ras_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Ras" required="">
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-secondary rounded-lg focus:ring-4 hover:bg-primary">
                    Add Ras
                </button>
            </form>
        </div>
    </section>
@endsection