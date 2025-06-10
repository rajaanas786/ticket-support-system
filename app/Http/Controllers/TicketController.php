<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

class TicketController extends Controller
{
    //
    public function create()
    {
        return view('ticket.create');
    }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'subject' => 'required',
    //         'message' => 'required',
    //         'type' => 'required',
    //     ]);

    //     $ticket = new Ticket($validated);
    //     $ticket->setConnectionByType($validated['type']);
    //     $ticket->save();

    //     return back()->with('success', 'Ticket submitted successfully!');
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'type' => 'required',
        ]);

        // Generate unique ticket number
        $ticketNo = $this->generateUniqueTicketNo($validated['type']);

        // Create ticket with all data including ticket number
        $ticket = new Ticket($validated);
        $ticket->ticket_no = $ticketNo; // Add this line to your Ticket model's fillable array
        $ticket->setConnectionByType($validated['type']);
        $ticket->save();

        return back()->with('success', 'Ticket submitted successfully! Your ticket number is: ' . $ticketNo);
    }

    /**
     * Generate a unique ticket number based on type and current timestamp
     */
    protected function generateUniqueTicketNo($type)
    {
        $prefix = strtoupper(substr($type, 0, 3)); // First 3 letters of type
        $timestamp = now()->format('YmdHis'); // Current date and time in format: YearMonthDayHourMinuteSecond
        $random = strtoupper(substr(md5(microtime()), 0, 4)); // Random 4 character string

        return $prefix . '-' . $timestamp . '-' . $random;
    }
}
