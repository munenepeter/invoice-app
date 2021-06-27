<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>

    <div class=""> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
           <!-- clients form -->
           <section class="p-2 bg-gray-100 text-gray-900">
            <form method="post" action="{{ route('invoices.store') }}" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
              @csrf
                <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-50">
                    <div class="space-y-2 col-span-full lg:col-span-1">
                        <p class="font-medium">Client Information</p>
                        <p class="text-xs">Please be sure to fill all the listed fields!</p>
                    </div>
                    <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                    
                        <div class="col-span-full sm:col-span-3">
                            <label for="names" class="text-sm">Client's name</label>
                            <input name="names" type="text" placeholder="Client's name" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-green-600 border-gray-300 text-gray-900">
                        </div> 
                        <div class="col-span-full sm:col-span-3">
                            <label for="email" class="text-sm">Client's Email</label>
                            <input name="email" type="email" placeholder="Client's Email" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-green-600 border-gray-300 text-gray-900">
                        </div>
                        
                        <div class="col-span-full sm:col-span-3">
                            <label for="items" class="text-sm">Items</label>
                            <input name="items" type="text" placeholder="Items" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-green-600 border-gray-300 text-gray-900">
                        </div>
                        <div class="col-span-full sm:col-span-3">
                            <label for="quantity" class="text-sm">Quantity</label>
                            <input name="quantity" type="text" placeholder="Quantity" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-green-600 border-gray-300 text-gray-900">
                        </div>
                        
                        <div class="col-span-full sm:col-span-3">
                            <label for="cost" class="text-sm">Cost</label>
                            <input name="cost" type="text" placeholder="Cost of an Item" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-green-600 border-gray-300 text-gray-900">
                        </div>
                        <div class="col-span-full sm:col-span-3">
                            <label for="date" class="text-sm">Date</label>
                            <input name="date" type="date" placeholder="10/05/2021" class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-green-600 border-gray-300 text-gray-900">
                        </div> 
                         <div class="col-span-full sm:col-span-1">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                   
                </fieldset> 
            </form>
        </section>
            
        </div>
    </div>
</x-app-layout>
