<x-app-layout>

    <div class="max-w-6xl mx-auto py-10">

        <h2 class="text-2xl font-bold mb-6">Sales</h2>

        {{-- Sale Form --}}
        <div class="bg-white p-6 rounded-2xl shadow mb-8">

            <form method="POST" action="{{ route('sales.store') }}"
                class="grid grid-cols-1 md:grid-cols-5 gap-4">
                @csrf

                <select name="product_id" class="border rounded-lg p-2">
                    @foreach($products as $p)
                    <option value="{{ $p->id }}">
                        {{ $p->name }}
                    </option>
                    @endforeach
                </select>

                <input name="qty" placeholder="Qty"
                    class="border rounded-lg p-2">

                <input name="discount" value="0" placeholder="Discount"
                    class="border rounded-lg p-2">

                <input name="paid" placeholder="Paid"
                    class="border rounded-lg p-2">

                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    Create Sale
                </button>
            </form>
        </div>

        {{-- Sales Table --}}
        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Product</th>
                        <th class="p-3 text-left">Qty</th>
                        <th class="p-3 text-left">Total</th>
                        <th class="p-3 text-left">Paid</th>
                        <th class="p-3 text-left">Due</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($sales as $sale)
                    <tr class="border-t">
                        <td class="p-3">{{ $sale->product->name }}</td>
                        <td class="p-3">{{ $sale->qty }}</td>
                        <td class="p-3">{{ $sale->total }}</td>
                        <td class="p-3 text-green-600">{{ $sale->paid }}</td>
                        <td class="p-3 text-red-600">{{ $sale->due }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-app-layout>