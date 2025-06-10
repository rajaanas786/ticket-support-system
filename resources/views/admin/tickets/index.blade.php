@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">All Tickets</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </form>
    </div>


    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded-lg" id="ticketsTable">
            <thead class="bg-gray-200">
                <tr>
                    <th class="text-left p-3">Name</th>
                    <th class="text-left p-3">Email</th>
                    <th class="text-left p-3">Ticket No</th>
                    <th class="text-left p-3">Subject</th>
                    <th class="text-left p-3">Type</th>
                    <th class="text-left p-3">Status</th>
                    <th class="text-left p-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allTickets as $ticket)
                    <tr class="border-b">
                        <td class="p-3">{{ $ticket['name'] }}</td>
                        <td class="p-3">{{ $ticket['email'] }}</td>
                        <td class="p-3">{{ $ticket['ticket_no'] }}</td>
                        <td class="p-3">{{ $ticket['subject'] }}</td>
                        <td class="p-3 capitalize">{{ $ticket['db'] }}</td>
                        <td class="p-3">
                            <span
                                class="px-2 py-1 rounded-full text-xs font-semibold {{ $ticket['status'] == 'Noted' ? 'bg-green-200 text-green-800' : 'bg-yellow-200 text-yellow-800' }}">
                                {{ $ticket['status'] }}
                            </span>
                        </td>
                        <td class="p-3">
                            <a href="/admin/tickets/{{ $ticket['db'] }}/{{ $ticket['id'] }}"
                                class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#ticketsTable').DataTable();
        });
    </script>
@endsection