<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot> 
    <div class="py-4"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-4">
         <a href="{{ route('invoices.create')}}" class="px-8 py-3 font-semibold rounded bg-green-600 text-green-100">Add</a>
        </div>
           <!-- clients -->
            <div class="flex flex-col text-left shadow-lg">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="flex-grow  border-b border-gray-200 sm:rounded-lg overflow-auto " style="height: 70vh;">
                   <table class="min-w-full divide-y divide-gray-600">
                    <thead class="bg-nile-100 divide-y divide-gray-900" style="position: sticky; top: 0;">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-200 tracking-wider">
                        Clients
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-200 tracking-wider">
                         Items
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-200 tracking-wider">
                        Sub-Total
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-200 tracking-wider">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-200 tracking-wider">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-md font-bold text-gray-200 tracking-wider">
                            <span>Actions</span>
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-red-400 divide-y divide-nile-200">
                    @foreach ($invoices as $invoice) 
                        <tr class="bg-nile-400 hover:bg-nile-500" > 
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                src="https://ui-avatars.com/api/?background=random&name={{$invoice->names}}"
                                alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-200">
                               {{$invoice->names}}
                                </div>
                                <div class="text-sm text-gray-400">
                                {{$invoice->email}}
                                </div>
                            </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-200">{{$invoice->items}}</div> 
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-200">{{number_format($invoice->subtotal)}}</div> 
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200">
                      {{number_format($invoice->items *  $invoice->subtotal)}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                        {{ \Carbon\Carbon::parse($invoice->date)->format('d/m/Y')}}
                        </td>
                        @if($invoice->sent) 
                        <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                            <a href="{{$invoice->id}}" class="text-green-600 font-semibold hover:text-green-900">View Invoice</a>
                        </td> 
                        @else
                         <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                            <a href="{{$invoice->id}}" class="text-indigo-600 font-semibold hover:text-indigo-900">Generate Invoice</a>
                        </td>
                        @endif 
                        </tr>
                          @endforeach
                        
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
