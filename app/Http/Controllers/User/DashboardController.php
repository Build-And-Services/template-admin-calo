<?php

namespace App\Http\Controllers\User;

use App\Models\Event;
use App\Models\Artist;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['role:customer']);
    }

    public function index()
    {
        try {
            $event = Event::all();
            $artis = Artist::all();
            $ticket = Ticket::with('ticketCategories')->get();
            return view('user.layouts.app', [
                'getEvents' => $event,
                'getArtists' => $artis,
                'getTickets' => $ticket
            ]);
        }catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
