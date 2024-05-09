<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TicketBenefit;
use App\Models\TicketCategory;
use App\Http\Controllers\Controller;

class TicketBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $ticketBenefits = TicketBenefit::all();
            return view('admin.pages.tickets.ticket-benefit.index', [
                'getTicketBenefit' => $ticketBenefits,
            ]);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function create()
    {
        try {
            $ticketCategories = TicketCategory::all();
            return view('admin.pages.tickets.ticket-benefit.create', ['getTicketCategory' => $ticketCategories]);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
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
                'ticket_category_id' => 'required',
                'benefits' => 'required'
            ],
            );
            $ticketBenefits = TicketBenefit::create([
                'ticket_category_id' => $request->ticket_category_id,
                'benefits' => $request->benefits
            ]);
            return redirect('/admin/ticket-benefit')->with('success', 'ticket category successfully created');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $ticketBenefits = TicketBenefit::findOrFail($id);
            $ticketCategories = TicketCategory::all();
            return view('admin.pages.tickets.ticket-benefit.edit', [
                'getTicketBenefit' => $ticketBenefits,
                'getTicketCategory' => $ticketCategories
            ]);
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ticket_category_id' => 'required',
            'benefits' => 'required',
        ],[
            'required' => ':attribute wajib diisi'
        ]);
        try {
            $ticketBenefits = TicketBenefit::findOrFail($id)->update([
                'ticket_category_id' => $request->ticket_category_id,
                'benefits' => $request->benefits
            ]);
            return redirect('/admin/ticket-benefit')->with('success', 'ticket category successfully updated');
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
            $ticketBenefits = TicketBenefit::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'ticket category sucessfully delete');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
