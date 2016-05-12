<?php

namespace App\Http\Controllers;

use App\Note;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateNoteRequest;

class NoteController extends Controller
{
    /**
     * Instantiate a new NoteController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();

        return view('note.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CreateNoteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNoteRequest $request)
    {
        $note = new Note;
        $user = Auth::user();

        $note->name = $request->name;
        $note->user_id = $user->id;
        $note->content = $request->content;

        $note->save();

        return redirect()->action('NoteController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);

        return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\CreateNoteRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateNoteRequest $request, $id)
    {
        $note = Note::findOrFail($id);
        $user = Auth::user();

        $note->name = $request->name;
        $note->user_id = $user->id;
        $note->content = $request->content;

        $note->save();

        return redirect()->action('NoteController@index');
    }

    /**
     * Show the form for deleting the specified resource.
     * 
     * @param  int $id 
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $note = Note::findOrFail($id);

        return view('note.delete', compact('note'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);

        $note->delete();

        return redirect()->action('NoteController@index');
    }
}
