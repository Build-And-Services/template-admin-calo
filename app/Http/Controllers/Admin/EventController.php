<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $events = Event::all();
            return view('admin.pages.events.index', ['getEvent' => $events]);
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
            $eventCategory = EventCategory::all();
            return view('admin.pages.events.create', ['getEventCategory' => $eventCategory]);
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
        $request->validate([
            'img' => 'required|mimes:png,jpg,jpeg,webp',
        ],
        [
            'required' => ':attribute wajib diisi',
        ]);
        try {
            $file = $request->file('img');
            $fileName = $file->getClientOriginalName();
            $filePath = 'event-img/' . $fileName;
            $file->move('event-img', $fileName);
            // dd($request->event_category_id);

            $event = Event::create([
                'event_category_id' => $request->event_category_id,
                'title' => $request->title,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'finish_time' => $request->finish_time,
                'open_gate' => $request->open_gate,
                'venue' => $request->venue,
                'img' => $filePath,
                'description' => $request->description,
                'status' => $request->status,
            ]);
            return redirect('admin/event')->with('success', 'event successfully created');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $event = Event::findOrFail($id);
            return view('admin.pages.events.show', ['getEvent' => $event]);
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
            $event = Event::findOrFail($id);
            $eventCategory = EventCategory::all();
            return view('admin.pages.events.edit', [
                'getEvent' => $event,
                'getEventCategory' => $eventCategory
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
            'img' => 'mimes:png,jpg,jpeg,webp',
            'status' => 'required'
        ],
        [
            'required' => ':attribute wajib diisi',
        ]);
        try {

            $event = Event::findOrFail($id);

            if ($request->hasFile('img')) {
                if (file_exists(( $event->img))) {
                    unlink(( $event->img));
                }
                $file = $request->file('img');
                $fileName = $file->getClientOriginalName();
                $filePath = 'event-img/' . $fileName;
                $file->move('event-img', $fileName);
            }else {
                $filePath = $event->img;
            }


            $event->update([
                'event_category_id' => $request->event_category_id,
                'title' => $request->title,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'finish_time' => $request->finish_time,
                'open_gate' => $request->open_gate,
                'venue' => $request->venue,
                'img' => $filePath,
                'description' => $request->description,
                'status' => $request->status,
            ]);
            return redirect('admin/event')->with('success', 'event successfully updated');
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
            $event = Event::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'event sucessfully delete');
        } catch(\Throwable $e){
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
