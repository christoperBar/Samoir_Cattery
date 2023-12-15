@extends('template.template')

@section('layout_content')
    <br>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add new transaction</h2>
            <form method="POST" action="/addnomnomtransaction" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="buyer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Buyer name</label>
                        <input type="text" name="buyer" id="buyer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type buyer name" required="">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="buyer_contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Buyer contact</label>
                        <input type="text" name="buyer_contact" id="buyer_contact"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="081...." required="">
                    </div>


                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                        </label>
                        <select name="status" id="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="pending">Pending</option>
                            <option value="success">Success</option>
                            <option value="canceled">Canceled</option>
                            <option value="expired">Expired</option>
                        </select>
                    </div>

                    <div>
                        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Quantity</label>
                        <input type="number" name="quantity" id="quantity"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type number" required="">
                    </div>

                    <div>
                        <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Total spend</label>
                        <input type="number" name="total" id="total"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="10000" required="">
                    </div>


                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-secondary rounded-lg focus:ring-4 hover:bg-primary">
                    Add Transactions
                </button>
            </form>
        </div>
    </section>
@endsection
