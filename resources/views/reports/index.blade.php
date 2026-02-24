<x-app-layout>

    <div class="max-w-6xl mx-auto py-10">

        <h2 class="text-2xl font-bold mb-6">Financial Reports</h2>

        {{-- Filter --}}
        <div class="bg-white p-6 rounded-2xl shadow mb-6">
            <form class="flex gap-4">
                <input type="date" name="from"
                    class="border rounded-lg p-2">

                <input type="date" name="to"
                    class="border rounded-lg p-2">

                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
                    Filter
                </button>
            </form>
        </div>

        {{-- Summary Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-gray-500">Total Sales</p>
                <h3 class="text-2xl font-bold text-green-600">
                    {{ $totalSell }}
                </h3>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-gray-500">Total Expense</p>
                <h3 class="text-2xl font-bold text-red-600">
                    {{ $totalExpense }}
                </h3>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow">
                <p class="text-gray-500">Net Profit</p>
                <h3 class="text-2xl font-bold text-indigo-600">
                    {{ $totalSell - $totalExpense }}
                </h3>
            </div>

        </div>

    </div>

</x-app-layout>