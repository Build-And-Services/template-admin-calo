<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $artist = Artist::all();
            return view('admin.pages.artists.index', ['getArtist'=>$artist]);
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
            $events = Event::all();
            return view('admin.pages.artists.create', ['getEvent'=>$events]);
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
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ],
        [
            'required' => ':attribute wajib diisi',
        ]);
        try {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $filePath = 'artist-img/' . $fileName;
            $file->move('artist-img', $fileName);

            $artist = Artist::create([
                'name' => $request->name,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'tiktok' => $request->tiktok,
                'profesion' => $request->profession,
                'event_id' => $request->event_id,
                'img' => $filePath
            ]);
            return redirect('/admin/artist')->with('success', 'data artist successfully created');
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $artist = Artist::find($id);
            return view('admin.pages.artists.edit', ['getArtist'=>$artist]);
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
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ],
        [
            'required' => ':attribute wajib diisi',
        ]);
        try {
            $artist = Artist::findOrFail($id);

            if (file_exists(( $artist->img))) {
                // dd($artist->img);
                unlink(( $artist->img));
            }

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $filePath = 'artist-img/' . $fileName;
            $file->move('artist-img', $fileName);
            $artist->update([
                'name' => $request->name,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'tiktok' => $request->tiktok,
                'profesion' => $request->profession,
                'event_id' => $request->event_id,
                'img' => $filePath
            ]);
            return redirect('/admin/artist')->with('success', 'data artist successfully updated');
        } catch (\Throwable $e) {
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
           $artist = Artist::findOrFail($id);
           if (file_exists(( $artist->img))) {
                unlink(( $artist->img));
            };
            $artist->delete();
           return redirect('/admin/artist')->with('success', 'data artist successfully delete');
        } catch (\Throwable $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
