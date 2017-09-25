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
        // $projects = project::all()->get();
        $projects = DB::table('projects')->get();
        // return $projects;
        return view('layouts.project',['pj'=>$projects]);
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
        $projects = project::find($id);
        $material = project::find($id)->pluck('material');
        $roles = project::find($id)->pluck('roles');
        $skills = project::find($id)->pluck('skills');
        $more_image = project::find($id)->pluck('more_image');
        $mater = explode("&&",$material[0]);
        $role = explode("&&",$roles[0]);
        $skill = explode("&&",$skills[0]);
        $image = explode("&&",$more_image[0]);
        

        return view('layouts.project-de',['pj'=>$projects,'ma'=>$mater,'ro'=>$role,'ski'=>$skill,'im'=>$image]);
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
