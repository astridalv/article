<?php

namespace App\Http\Controllers;
use App\Reporter;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reporter = Reporter::all();
      return view('reporters.view', compact('reporter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('reporters.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Reporter();
        $data->reporterid = $request->reporterid;
        $data->nama = $request->nama;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->alamat = $request->alamat;
        $data->image = $request->image;
        $data->save();
        Session::flash('notice', 'Success add Reporter');
        return redirect()->route('reporter.index');
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
    public function edit($reporterid)
    {
      
      $data = Reporter::find($reporterid);

      return view('reporters.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reporterid)
    {

      $data = Reporter::find($reporterid);
      $data->reporterid = $request->reporterid;
      $data->nama = $request->nama;
      $data->jeniskelamin = $request->jeniskelamin;
      $data->alamat = $request->alamat;
      $data->image = $request->image;
      $data->save();
      Session::flash('notice', 'Success update Reporter');
      return redirect()->route("reporter.index");
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
