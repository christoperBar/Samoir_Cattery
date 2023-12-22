@extends('template.template')

@section('layout_content')
    <br>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update your cat</h2>
            <form method="POST" action="/updatecat/{{ $cat->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="cat_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Cat Name</label>
                        <input type="text" name="cat_name" id="cat_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type cat name" required="" value="{{ $cat->cat_name }}">
                    </div>

                    <div class="w-full">
                        <label for="color"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                        <input type="text" name="color" id="color"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Cat color" required="" value="{{ $cat->color }}">
                    </div>
                    <div>
                        <label for="is_adoptable" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Can be
                            adopted?</label>
                        <select name="is_adoptable" id="is_adoptable"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div>
                        <label for="ras_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ras</label>
                        <select name="ras_id" id="ras_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($rases as $ras)
                                <option value="{{ $ras->id }}">{{ $ras->ras_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="maturity"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maturity</label>
                        <select name="maturity" id="maturity"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="kitten">Kitten</option>
                            <option value="adult">Adult</option>
                        </select>
                    </div>
                    <div class="relative max-w-sm">
                        <label for="birtday"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                        <div class="absolute inset-y-12 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input datepicker type="text" id="birthday" name="birthday"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-secondary dark:focus:border-secondary"
                            placeholder="Select date" required="" value="{{ $cat->birthday }}">
                    </div>
                    <div>
                        <label for="gender"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maturity</label>
                        <select name="gender" id="gender"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="jantan">Jantan</option>
                            <option value="betina">Betina</option>
                        </select>
                    </div>
                    <div id="imagePreview" class="flex flex-row flex-wrap items-center justify-center w-full sm:col-span-2">
                        
                    </div>

                    <div class="flex items-center justify-center w-full sm:col-span-2">
                        <label for="cat_photo" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">Upload Your Cat Images
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">JPEG, PNG or JPG (MAX. 1MB)</p>
                            </div>
                            <input name="images[]" id="images" type="file" accept="image/jpg, image/png, image/jpeg" multiple />
                        </label>
                    </div> 

                    {{-- catimages --}}
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-secondary rounded-lg focus:ring-4 hover:bg-primary">
                    Update Cat
                </button>
            </form>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            const imageDataTransfer = new DataTransfer(); 
            $('#images').change(function(e){
                e.preventDefault();
                for(var i = 0; i < this.files.length; i++){
                    var fileItem = this.files.item(i);
                    $('#imagePreview').append(
                        `<div name='${fileItem.name}' class="relative">` +
                        `<img  name='${fileItem.name}' class="rounded h-32 w-52 object-cover" src='${URL.createObjectURL(fileItem)}'  alt="">`+
                        `<button name='${fileItem.name}' type="button" id="deleteimage" class="absolute top-0 right-0 text-red-500 bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">x</button>` +
                        `</div>`
                    );
                };
                for (let file of this.files) {
                    imageDataTransfer.items.add(file);
                }
                    this.files = imageDataTransfer.files;
            });
            $(document).on('click', '#deleteimage', function () {
                var fileName = $(this).attr('name');
                for(let i = 0; i < imageDataTransfer.items.length; i++){
                        if(fileName === imageDataTransfer.items[i].getAsFile().name){
                            imageDataTransfer.items.remove(i);
                            break;
                        }
                    }
                $('#images')[0].files = imageDataTransfer.files;
                $('div[name="' + fileName + '"]').remove();
            });
        });
    </script>
@endsection
