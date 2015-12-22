<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Fileentry;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileEntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $entries = Fileentry::all();
//        return view('fileentries.index', compact('entries'));

        $files = Fileentry::all();
        return view('filePages.files-list')->with('files', $files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

//    public function add() {
//
//        $file = Request::file('filefield');
//        $extension = $file->getClientOriginalExtension();
//        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
//        $entry = new Fileentry();
//        $entry->mime = $file->getClientMimeType();
//        $entry->original_filename = $file->getClientOriginalName();
//        $entry->filename = $file->getFilename().'.'.$extension;
//
//        $entry->save();
//
//        return redirect('fileentry');
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation //
        $validation = Validator::make($request->all(), [
            'userfile'     => 'required|mimes:pdf|min:1|max:250'
        ]);


        if( $validation->fails() ){
            return redirect()->back()->withInput()
                ->with('errors', $validation->errors() );
        }

        $fileentry = new Fileentry;

        // upload the file //
        $file = $request->file('userfile');
        $destination_path = 'files/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);

        // save file data into database //
        $fileentry->file = $destination_path . $filename;
        $fileentry->save();

        //*****************
        //NEEDS RETURN/REDIRECT
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
