<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketCategory;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $tickets = Ticket::all();
            return view('admin.pages.tickets.index', ['getTickets' => $tickets]);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $ticketCategories = TicketCategory::all();
            $events = Event::all();
            return view('admin.pages.tickets.create', [
                'getTicketCategories' => $ticketCategories,
                'getEvents' => $events
            ]);
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'event_id' => 'required',
                'ticket_category_id' => 'required',
            ],
            [
                'required' => ':attribute wajib diisi'
            ]
            );
            $ticket = Ticket::create([
                'title' => $request->title,
                'price' => $request->price,
                'stock' => $request->stock,
                'event_id' => $request->event_id,
                'ticket_category_id' => $request->ticket_category_id,
            ]);
            return redirect('/admin/ticket')->with('success', 'ticket successfully created');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $ticket = Ticket::findOrFail($id);
            $events = Event::all();
            $ticketCategories = TicketCategory::all();
            return view('admin.pages.tickets.edit', [
                'getTicket' => $ticket,
                'getEvents' => $events,
                'getTicketCategory' => $ticketCategories
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'event_id' => 'required',
                'ticket_category_id' => 'required',
            ],
            [
                'required' => ':attribute wajib diisi'
            ]
            );
            $ticket = Ticket::findOrFail($id)->update([
                'title' => $request->title,
                'price' => $request->price,
                'stock' => $request->stock,
                'event_id' => $request->event_id,
                'ticket_category_id' => $request->ticket_category_id,
            ]);
            return redirect('/admin/ticket')->with('success', 'ticket successfully updated');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $ticket = Ticket::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'ticket successfully deleted');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors($th->getMessage());
        }
    }
}
