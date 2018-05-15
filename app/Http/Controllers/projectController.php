<?php

namespace App\Http\Controllers;

use DB;
use App\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pro_web = DB::table('projects')->where('category', '=','website')->orWhere('category', '=','program')->get();
        $pro_design = DB::table('projects')->where('category', '=','design')->get();
        $pro_video = DB::table('projects')->where('category', '=','video')->get();
        
        return view('layouts.project',compact('pro_web', 'pro_design', 'pro_video'));
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
        //
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
        $project = project::find($id);
        // $mater = explode("&&",$material[$id-1]);
        // return $role = explode("&&",$project->roles);
        // $skill = explode("&&",$skills[$id-1]);
        // $image = explode("&&",$more_image[$id-1]);
        

        return view('layouts.project-de',compact('project'));
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
