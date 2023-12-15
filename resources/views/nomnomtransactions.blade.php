@extends('template.template')

@section('layout_content')

<div class=" px-6 pt-2 pb-6 sm:pt-2 sm:pb-6 sm:px-20">

    <div class="flex flex-row">
        <img src="https://i.imgur.com/xN948Vr.png" alt="catndip Logo" class="inline-block mr-2 h-10 w-16 my-10">
        <h3 class="my-10 text-3xl font-bold dark:text-white">NomNomEnergy Transactions</h3>
    </div>

    
    <div class="flex flex-col space-y-4 sm:flex-col pb-6 ">
        
        <a href="/addnomnomtransactionsform"
            class="flex items-center justify-center text-white bg-secondary hover:bg-primary focus:ring-4 focus:ring-primary font-medium rounded-lg text-sm px-4 py-2 dark:bg-secondary dark:hover:bg-primary focus:outline-none dark:focus:ring-primary">
            <svg class="h-3.5 w-3.5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Add Transaction
        </a>
    </div>
    

    <form>   
        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by buyer or status">
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

    <br>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Buyer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Buyer contact
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Transaction time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="relative">
                @foreach ($transactions as $transaction)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 relative">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $transaction->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $transaction->buyer }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $transaction->buyer_contact }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $transaction->created_at }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $transaction->quantity }}
                    </td>
                    <td class="px-6 py-4">
                        Rp. {{ number_format($transaction->total, 0, ',', '.') }}
                        
                    </td>
                    <td class="px-6 py-4 hover:bg-gray-100 relative change-status" >
                        
                        <div class="flex items-center">
                            @if ($transaction->status == "success")
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Success
                            @elseif ($transaction->status == "pending")
                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-200 me-2"></div> Pending
                            @elseif ($transaction->status == "expired")
                            <div class="h-2.5 w-2.5 rounded-full bg-gray-400 me-2"></div> Expired
                            @elseif ($transaction->status == "canceled")
                            <div class="h-2.5 w-2.5 rounded-full bg-red-700 me-2"></div> Canceled
                            @endif
                        </div>
                        
                        <div
                                class="status-option z-10 hidden absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <form method="POST" action="/changenomnompstatus{{ $transaction->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="pending">
                                            </input>
                                            <button type="submit">
                                                Pending
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <form method="POST" action="/changenomnompstatus{{ $transaction->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="success">
                                            </input>
                                            <button type="submit">
                                                Success
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <form method="POST" action="/changenomnompstatus{{ $transaction->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="canceled">
                                            </input>
                                            <button type="submit">
                                                Canceled
                                            </button>
                                        </form>
                                    </li>
                                    <li>
                                        <form method="POST" action="/changenomnompstatus{{ $transaction->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="expired">
                                            </input>
                                            <button type="submit">
                                                Expired
                                            </button>
                                        </form>
                                    </li>
                                    
                                </ul>
                        </div>



                    </td>    
                    <td class="px-6 py-4">
                        @if ($transaction->status == "success")
                        <form action="/deletenomnomtransaction/{{ $transaction->id }}" method="POST">
                            @csrf 
                            @method("DELETE")
                            <button disabled class="font-medium text-gray-400 dark:text-gray-400">
                                Delete
                            </button>
                        </form>
                        @elseif ($transaction->status == "pending")
                        <form action="/deletenomnomtransaction/{{ $transaction->id }}" method="POST">
                            @csrf 
                            @method("DELETE")
                            <button class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                Delete
                            </button>
                        </form>
                        @elseif ($transaction->status == "expired")
                        <form action="/deletenomnomtransaction/{{ $transaction->id }}" method="POST">
                            @csrf 
                            @method("DELETE")
                            <button disabled class="font-medium text-gray-400 dark:text-gray-400">
                                Delete
                            </button>
                        </form>
                        @elseif ($transaction->status == "canceled")
                        <form action="/deletenomnomtransaction/{{ $transaction->id }}" method="POST">
                            @csrf 
                            @method("DELETE")
                            <button disabled class="font-medium text-gray-400 dark:text-gray-400">
                                Delete
                            </button>
                        </form>
                        @endif

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="container">
            {{ $transactions->links() }}
            
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('td.change-status').click(function (e) { 
                $(this).find('div.status-option').show();
                
            });
            $(document).mouseup(function (e) { 
                var container = $("div.status-option");
                if (!container.is(e.target) && container.has(e.target).length === 0) 
                    {
                        $('div.status-option').hide();
                    }
            });

        });
        
    </script>
</div>


@endsection
