<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="accordion-collapse" data-accordion="collapse">
                        @foreach ($orders as $order)
                            <h2 id="accordion-collapse-heading-`${order->id}`">
                                <span type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border border-gray-200 dark:border-gray-700 border-b-0 text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-t-xl" >
                                    Commande n° {{ $order->id }} passée le {{ $order->created_at->format('d M Y') }}
                                   </span>
                            </h2>
                            <div id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
                                    <table class="min-w-full">
                                        <tr>
                                            <td class="text-left" colspan="4">Nom</td>
                                            <td colspan="4">Prix</td>
                                            <td class="text-right" colspan="4">Quantite</td>
                                        </tr>
                                        @foreach($order->products as $product)
                                        <tr class="border-b hover:bg-gray-50">
                                            <td colspan="4">
                                                {{ $product->name }}
                                            </td>
                                            <td colspan="4">
                                                {{ str_replace('.', ',', $product->pivot->price / 100) . ' €' }}
                                            </td>
                                            <td colspan="4" class="text-right">
                                                {{ $product->pivot->quantity }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
