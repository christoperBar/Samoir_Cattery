@extends('template.template')

@section('layout_content')
<div class="bg-white py-24 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Apa itu NomNomEnergy?</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600"> NomNomEnergy adalah makanan basah premium untuk kucing berbahan dasar puyuh muda. Dibuat khusus untuk memenuhi kebutuhan nutrisi tinggi dan kelezatan yang dicintai oleh kucing Anda. Kami bangga menyajikan pilihan makanan yang sehat dan lezat untuk menjaga kesehatan dan kebahagiaan kucing kesayangan Anda.</p>
                <br>

                <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900"><a href="https://api.whatsapp.com/send/?phone=6281394944884&text&type=phone_number&app_absent=0">Pesan Sekarang</a></button>
                <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900"><a href="/nomnomtransactions">NomNomEnergy Transactions</a></button>
            </div>
        <div class="ms-4 sm:ms-30 max-h-xs max-w-2xl">
            <img class="h-full w-full rounded-lg object-cover drop-shadow-lg" src="https://i.imgur.com/xN948Vr.png"
                alt="image description">
        </div>
    </div>
</div>


<div class="bg-primary py-24 sm:py-24">
    <div class="mx-auto grid max-w-7xl gap-x-24 gap-y-20 px-6 lg:px-8 xl:grid-cols-2">
        <div class="max-h-xl max-w-xl">
            <img class="h-full w-full rounded-lg object-cover drop-shadow-lg" src="https://i.imgur.com/HdpUbpF.jpeg"
                alt="image description">
        </div>
        <div class="max-w-3xl">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Mengapa Anda Harus Menggunakan NomNomEnergy untuk Kucing Anda?</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300"> Menggunakan NomNomEnergy memberikan sejumlah keuntungan bagi kesehatan dan kesejahteraan kucing Anda, termasuk:
            </p>
            <br>

            <ul class="space-y-4 text-gray-300 list-disc list-inside">
                <li class="font-semibold ">
                    Bahan Berkualitas Tinggi
                    <p class="font-normal">erbuat dari puyuh muda berkualitas tinggi, NomNomEnergy memberikan sumber protein yang optimal untuk pertumbuhan dan pemeliharaan otot kucing Anda.</p>
                </li>
                <li class="font-semibold">
                    Nutrisi Seimbang
                    <p class="font-normal">Dirumus khusus oleh ahli gizi hewan, setiap takir NomNomEnergy mengandung campuran nutrisi yang seimbang, termasuk vitamin dan mineral esensial.</p>
                </li>
                <li class="font-semibold">
                    Tidak Ada Bahan Tambahan Berbahaya
                    <p class="font-normal">Bebas dari pewarna, perasa buatan, dan bahan tambahan berbahaya lainnya, NomNomEnergy memberikan makanan yang bersih dan sehat untuk kucing Anda.

                    </p>
                </li>
            </ul>
            <br>
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Manfaat NomNomEnergy</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300"> NomNomEnergy memberikan sejumlah manfaat, termasuk:
            </p>
            <br>

            <ul class="space-y-4 text-gray-300 list-disc list-inside dark:text-gray-400">
                <li class="font-semibold">
                    Pertumbuhan yang Sehat
                    <p class="font-normal">Nutrisi yang optimal dari puyuh muda mendukung pertumbuhan yang sehat pada kucing anak-anak.</p>
                </li>
                <li class="font-semibold">
                    Pemeliharaan Berat Badan Ideal
                    <p class="font-normal">Dengan formulasi yang tepat, NomNomEnergy membantu menjaga berat badan ideal pada kucing dewasa.</p>
                </li>
                <li class="font-semibold">
                    Kesehatan Kulit dan Bulu
                    <p class="font-normal">Kandungan nutrisi yang kaya membantu mendukung kesehatan kulit dan bulu, membuat kucing Anda berkilau dan cantik.

                    </p>
                </li>
                <li class="font-semibold">
                    Sistem Kekebalan yang Kuat
                    <p class="font-normal">Antioksidan alami membantu memperkuat sistem kekebalan kucing Anda.

                    </p>
                </li>
            </ul>

        </div>
        

    </div>
</div>
@endsection
