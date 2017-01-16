<?php

namespace App\Http\Controllers;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Image;
use Session;
use DB, Excel;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {
      //
     }
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

          $data = new Upload;

          $data->title = $request->title;
          $data->Description = $request->Description;
          $data->image = $filename;
          $data->save();

          //return redirect(route("image"));
          return view('images.index');

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

        $data = Upload::find($id);

        return view('images.edit',  compact('data'));
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
      dd($request);
      /*
      $data = Article::find($id);
      $data->nama = $request->nama;
      $data->content = $request->content;
      $data->save();
      */
        $update = Upload::find($id);
        $update->title = $request['title'];
        $update->Description = $request['Description'];

        if($request->file('image') == "")
        {
            $update->image = $request->image;
        }
        else
        {
            $file       = $request->file('gambar');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("upload_images/", $fileName);
            $update->Image = $fileName;
        }
        $data->save();
      return redirect(route("viewimage"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Upload::find($id);
      $data->delete($id);
      return redirect()->route("viewimage");
    }

    public function exportexcel($id){

      Excel::create('bebas', function($excel) use($id) {
      $query = Upload::find($id);
      $find = Upload::select('title','Description')->where('id','=', $id)->get();
      $commentresult = $query->comments()->get();

      $excel->sheet('gambar', function($sheet) use($find)  {
      $sheet->fromArray($find);
      });

      // Our second sheet
      $excel->sheet('comments', function($sheet) use($commentresult) {
      $sheet->fromArray($commentresult);
      });

    })->download('xls');
    Session::flash("notice", "Export success created");
    }
    public function viewimport(){
    //  return view('images.vimport');
    }
    public function importtexcel(){
/*
    		if(Input::hasFile('import_file')){
    			$path = Input::file('import_file')->getRealPath();
    			$data = Excel::load($path, function($reader) use($path){
    			})->get();
          Excel::selectSheets('gambar')->load($path , function($reader));

          $reader->selectSheets('gambar');
    			if(!empty($data) && $data->count()){
    				foreach ($data as $key => $value) {
    					$insert[] = ['id' => $value->id,'title' => $value->title, 'description' => $value->description, 'image'=> $value->image, 'created_at'=> $value->create_at, 'updated_at'=> $value->updated_at];
    				}
    				if(!empty($insert)){
    					Upload::table('items')->insert($insert);
    					Session::flash("notice", "Import success created");
    				}
    			}
    		}
    		return back();
        */
    }

}
