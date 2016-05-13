<?php

namespace App\Http\Controllers;

use App\Notebook;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateNotebookRequest;

class NotebookController extends Controller
{
    /**
     * Instantiate a new NotebookController instance.
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
        $notebooks = Notebook::all();

        return view('notebook.index', compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notebook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CreateNotebookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNotebookRequest $request)
    {
        $notebook = new Notebook;
        $user = Auth::user();

        $notebook->name = $request->name;
        $notebook->user_id = $user;
        $notebook->description = $request->description;

        $notebook->save();

        return redirect()->action('NotebookController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show the selected notebook.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notebook = Notebook::findOrFail($id);

        return view('notebook.edit', compact('notebook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\CreateNotebookRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateNotebookRequest $request, $id)
    {
        $notebook = Notebook::findOrFail($id);
        $user = Auth::user();

        $notebook->name = $request->name;
        $notebook->user_id = $user;
        $notebook->description = $request->description;

        $notebook->save();

        return redirect()->action('NotebookController@index');
    }

    /**
     * Show the form for specified resource
     * @param  int $id 
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $notebook = Notebook::findOrFail($id);

        return view('notebook.delete', compact('notebook'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notebook = Notebook::findOrFail($id);

        $notebook->delete();

        return redirect()->action('NotebookController@index');
    }
}
