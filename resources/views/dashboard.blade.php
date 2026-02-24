<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inventory Dashboard
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <a href="{{ route('products.index') }}"
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-bold text-gray-700">Products</h3>
                    <p class="text-gray-500 mt-2">Manage inventory products</p>
                </a>

                <a href="{{ route('sales.index') }}"
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-bold text-gray-700">Sales</h3>
                    <p class="text-gray-500 mt-2">Create and view sales</p>
                </a>

                <a href="{{ route('reports.index') }}"
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-bold text-gray-700">Reports</h3>
                    <p class="text-gray-500 mt-2">Financial summary</p>
                </a>

                <a href="{{ route('journals.index') }}"
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-bold text-gray-700">Journal Entries</h3>
                    <p class="text-gray-500 mt-2">Accounting records</p>
                </a>

            </div>

        </div>
    </div>
</x-app-layout>