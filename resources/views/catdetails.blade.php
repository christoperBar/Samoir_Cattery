@extends('template.template')

@section('layout_content')
    <div class=" px-6 pt-6 pb-6 sm:pt-2 sm:pb-6 sm:px-20">
        <div class="mx-auto grid max-w-7xl gap-x-12 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div id="animation-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @if (count($catimages) == 1)
                    @foreach ($catimages as $catimage)
                    <div>
                        <img src="{{ $catimage->cat_photo }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    @endforeach
                    @else
                    @foreach ($catimages as $catimage)
                        <div class="hidden duration-200 ease-linear" data-carousel-item>
                            <img src="{{ $catimage->cat_photo }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    @endforeach
                    @endif
                    



                </div>
                <!-- Slider controls -->
                @if (count($catimages) > 1)
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
                @endif
            </div>
            <div class="flex flex-col sm:pt-6 gap-y-4">
                <div class="flex flex-row items-center">
                    <h2 class="text-2xl font-bold mb-2 pr-4">{{ $cat->cat_name }}</h2>
                    <p class="text-gray-400 text-sm">{{ $cat->birthday }}</p>
                </div>
                <p class="text-gray-600">Ras: {{ $cat->ras->ras_name }}</p>
                <p class="text-gray-600">Color: {{ $cat->color }}</p>
                <p class="text-gray-600">Maturity: {{ $cat->maturity }}</p>
                <p class="text-gray-600">Gender: {{ $cat->gender }}</p>
                



                @auth
                <form method="POST" action="/addcatimages/{{ $cat->id }}" enctype="multipart/form-data" id="imageForm">
                @csrf
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Add more cat images</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="images" name="images[]" type="file" multiple>
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-secondary rounded-lg focus:ring-4 hover:bg-primary">
                        Add Cat Images  
                    </button>
                </form>
                @endauth
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            const imageDataTransfer = new DataTransfer(); 
            $('#images').change(function(e){
                for (let file of this.files) {
                    imageDataTransfer.items.add(file);
                }
                    this.files = imageDataTransfer.files;
            });
        });
    </script>
@endsection
