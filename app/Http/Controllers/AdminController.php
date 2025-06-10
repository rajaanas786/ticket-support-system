<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Note;


class AdminController extends Controller
{
    //

    protected $connections = ['technical', 'account', 'product', 'general', 'feedback'];

    // Show all tickets from all DBs
    public function index()
    {
        $allTickets = [];

        foreach ($this->connections as $type) {
            $tickets = Ticket::on($type)->get(); // DB switch
            $tickets->each(fn($t) => $t->db = $type); // Track origin DB
            $allTickets = array_merge($allTickets, $tickets->toArray());
        }

        return view('admin.tickets.index', compact('allTickets'));
    }

    // View a single ticket
    public function show($type, $id)
    {
        $ticket = Ticket::on($type)->findOrFail($id);
        return view('admin.tickets.show', compact('ticket', 'type'));
    }

    // Add note to a ticket
    public function note(Request $request, $type, $id)
    {
        $request->validate(['note' => 'required']);

        $ticket = Ticket::on($type)->findOrFail($id);
        $ticket->status = 'Noted';
        $ticket->save();

        Note::create([
            'ticket_type' => $type,
            'ticket_id' => $ticket->id,
            'note' => $request->note,
        ]);

        return back()->with('success', 'Note added and saved.');
    }

}
