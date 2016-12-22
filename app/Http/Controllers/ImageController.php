<?php

namespace App\Http\Controllers;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Image;
use Session;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Upload::all();
        return view("images.view",  compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("images.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $file = Input::file('image');
      $filename = $file->getClientOriginalName();
      //dd($request->all());
      /*$img = Image::make($request->file('image'))->save('upload_images'.'/'.$filename);  */
      $img = Image::make($file);
      $img->save('upload_images'.'/'.$filename);
      //Image::create($request->all());
      $data = new Upload;

      $data->title = $request->title;
      $data->Description = $request->Description;
      $data->image = $filename;
      $data->save();

      return redirect(route("images.view"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $value = Upload::find($id);
      $comments = $value->comments()->get();
      return view('images.detail')
      ->with('value', $value)
      ->with('comments', $comments);
      return view('images.detail', compact('value','comments'));
     //$comments = Upload::find($id)->comments->sortBy('Comments.created_at');
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
