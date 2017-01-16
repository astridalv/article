<?php

namespace App\Http\Controllers;
//use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use ImageController;
use App\Upload, App\Comment;
use Illuminate\Http\Request;
use Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->all());
        $data = new Comment;
        $data->subject = $request->subject;
        $data->Comment = $request->comment;
        $data->upload_id = $request->upload_id;
        $data->save();

        Session::flash("notice", "Comment success Added");
        //return view('images.index');
      //return redirect()->action('ImageController@show', [$request->id]);
      return redirect()->back();
      //return redirect()->route('detailimage'. $request->upload_id);

      /*$validate = Validator::make($request->all(), Comment::valid());
      if($validate->fails()) {
        return Redirect::to('commentimage/'. $request->upload_id)
          ->withErrors($validate)
          ->withInput();
      } else {
        Comment::create($request->all());
        Session::flash('notice', 'Success add comment');
        return Redirect::to('commentimage/'. $request->upload_id);
      }*/
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
