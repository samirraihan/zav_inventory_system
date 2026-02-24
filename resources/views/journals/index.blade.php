<x-app-layout>

    <div class="max-w-6xl mx-auto py-10">

        <h2 class="text-2xl font-bold mb-6">Journal Entries</h2>

        <div class="bg-white rounded-2xl shadow overflow-hidden">

            <table class="w-full text-sm">
                <thead class="bg-gray-100-100">
                    <tr>
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Type</th>
                        <th class="p-3 text-left">Account</th>
                        <th class="p-3 text-left">Amount</th>
                        <th class="p-3 text-left">Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($journals as $journal)
                    <tr class="border-t">
                        <td class="p-3">{{ $journal->id }}</td>

                        <td class="p-3 font-bold {{ $journal->type === 'debit' ? 'text-emerald-600' : 'text-rose-600' }}">
                            {{ ucfirst($journal->type) }}
                        </td>

                        <td class="p-3">{{ $journal->account }}</td>
                        <td class="p-3">{{ $journal->amount }}</td>
                        <td class="p-3">{{ $journal->entry_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

</x-app-layout>