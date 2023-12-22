@extends('template.template')

@section('layout_content')
    <div class="bg-white py-24 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Apa itu CatnDip?</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600"> CatNDip adalah destinasi utama Anda untuk layanan grooming
                    kucing profesional. Kami memahami kebutuhan unik teman kucing Anda dan menyediakan pengalaman grooming
                    tanpa stres. Tim groomer kami yang terampil berdedikasi untuk memastikan kucing Anda terlihat dan merasa
                    yang terbaik, meningkatkan kesejahteraan mereka secara keseluruhan.</p>
                    <br>

                    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900"><a href="https://api.whatsapp.com/send/?phone=6281394944884&text&type=phone_number&app_absent=0">Pesan Sekarang</a></button>
                    
                    @auth
                    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900"><a href="/catndiptransactions">CatnDip Transactions</a></button>
                    @endauth
                </div>
            <div class="ms-4 sm:ms-48 max-h-xs max-w-xs">
                <img class="h-full w-full rounded-lg object-cover drop-shadow-lg" src="https://i.imgur.com/3nC88Vo.jpeg"
                    alt="image description">
            </div>
        </div>
    </div>

    <div class="bg-primary py-24 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Kenapa kita harus rutin grooming kucing
                    kita? </h2>
                <p class="mt-6 text-lg leading-8 text-gray-300"> Grooming adalah aspek penting dalam menjaga kesehatan dan
                    kebahagiaan kucing Anda. Grooming secara teratur memberikan beberapa manfaat, termasuk:
                </p>
                <br>

                <ul class="space-y-4 text-gray-300 list-disc list-inside">
                    <li class="font-semibold ">
                        Mencegah Kusut
                        <p class="font-normal">Menyisir secara teratur membantu mencegah terbentuknya kusut dan kekakuan bulu kucing Anda, yang dapat tidak nyaman bahkan menyakitkan bagi mereka.</p>
                    </li>
                    <li class="font-semibold">
                        Mengurangi Rontok
                        <p class="font-normal">Grooming membantu mengontrol rontok bulu, mengurangi jumlah bulu di sekitar rumah Anda dan mengurangi risiko bola bulu.</p>
                    </li>
                    <li class="font-semibold">
                        Kulit Sehat
                        <p class="font-normal">Grooming teratur mempromosikan bulu dan kulit yang sehat dengan mendistribusikan minyak alami, mencegah kekeringan dan iritasi.

                        </p>
                    </li>
                </ul>

            </div>
            <div class="max-h-xl max-w-xl">
                <img class="h-full w-full rounded-lg object-cover drop-shadow-lg" src="https://i.imgur.com/TAMR7QW.jpeg"
                    alt="image description">
            </div>

        </div>
    </div>

    <div class="bg-secondary py-24 sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
            <div class="max-h-xl max-w-xl">
                <img class="h-full w-full rounded-lg object-cover drop-shadow-lg" src="https://i.imgur.com/WNAluZ7.jpeg"
                    alt="image description">
            </div>
            <div class="max-w-3xl">
                <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Kenapa memilih CatNDip?</h2>
                <p class="mt-6 text-lg leading-8 text-black"> Di CatNDip, kami menawarkan berbagai layanan grooming yang disesuaikan dengan kebutuhan kucing Anda. Manfaat kami meliputi:
                </p>
                <br>

                <ul class="space-y-4 text-black list-disc list-inside dark:text-gray-400">
                    <li class="font-semibold">
                        Groomer Profesional
                        <p class="font-normal">Tim kami terdiri dari groomer kucing berpengalaman dan bersertifikat yang mengutamakan kenyamanan dan kesejahteraan kucing Anda.</p>
                    </li>
                    <li class="font-semibold">
                        Layanan Disesuaikan
                        <p class="font-normal">Mulai dari grooming dasar hingga perawatan khusus, kami menawarkan berbagai layanan untuk memenuhi kebutuhan individual kucing Anda.</p>
                    </li>
                    <li class="font-semibold">
                        Produk Berkualitas
                        <p class="font-normal">Kami menggunakan produk grooming berkualitas tinggi dan ramah kucing untuk memastikan keselamatan dan kenyamanan teman kucing Anda.

                        </p>
                    </li>
                    <li class="font-semibold">
                        Lingkungan Bebas Stres
                        <p class="font-normal">Kami menciptakan suasana yang tenang dan menenangkan untuk memastikan pengalaman grooming tanpa stres bagi kucing Anda.

                        </p>
                    </li>
                </ul>

            </div>
            

        </div>
    </div>
@endsection
