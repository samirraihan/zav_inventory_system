<x-app-layout>

    <div class="max-w-6xl mx-auto py-10">

        <h2 class="text-2xl font-bold mb-6">Products</h2>

        {{-- Add Product --}}
        <div class="bg-white p-6 rounded-2xl shadow mb-8">
            <form method="POST" action="{{ route('products.store') }}"
                class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @csrf

                <input name="name" placeholder="Product Name"
                    class="border rounded-lg p-2">

                <input name="purchase_price" placeholder="Purchase Price"
                    class="border rounded-lg p-2">

                <input name="sell_price" placeholder="Sell Price"
                    class="border rounded-lg p-2">

                <input name="stock" placeholder="Stock"
                    class="border rounded-lg p-2">

                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                    Add Product
                </button>
            </form>
        </div>

        {{-- Product Table --}}
        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Purchase</th>
                        <th class="p-3 text-left">Sell</th>
                        <th class="p-3 text-left">Stock</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                    <tr class="border-t">
                        <td class="p-3">{{ $product->name }}</td>
                        <td class="p-3">{{ $product->purchase_price }}</td>
                        <td class="p-3">{{ $product->sell_price }}</td>
                        <td class="p-3">{{ $product->stock }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-app-layout>