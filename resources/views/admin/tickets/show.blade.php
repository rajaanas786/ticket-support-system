@extends('layouts.app')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>



@section('content')
    <div class="max-w-2xl mx-auto bg-white shadow p-6 rounded-lg">
        <h2 class="text-xl font-bold mb-4">{{ $ticket->subject }}</h2>
        <p class="mb-4 text-gray-700">{{ $ticket->message }}</p>

        <form method="POST" action="/admin/tickets/{{ $type }}/{{ $ticket->id }}/note" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium mb-1 text-sm">Add Note:</label>
                <textarea name="note" id="note-editor" class="w-full border rounded"
                    placeholder="Write note here..."></textarea>

            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit Note</button>
        </form>
        <script>
            ClassicEditor
                .create(document.querySelector('#note-editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
        @php
            $notes = \App\Models\Note::where('ticket_type', $type)->where('ticket_id', $ticket->id)->latest()->get();
        @endphp

        @if($notes->count())
            <h3 class="mt-6 text-lg font-bold">Previous Notes</h3>
            @foreach($notes as $note)
                <div class="border p-4 my-2 bg-gray-100 rounded">
                    <div class="text-sm text-gray-600">{{ $note->created_at->format('d M Y h:i A') }}</div>
                    <div class="mt-2">{!! $note->note !!}</div>
                </div>
            @endforeach
        @endif

        <div class="mt-6">
            <a href="{{ url('/admin/tickets') }}" class="text-sm text-gray-600 hover:text-blue-500">← Back to tickets</a>
        </div>
    </div>
@endsection