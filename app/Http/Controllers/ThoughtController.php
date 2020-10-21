<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Thought::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thought = new Thought();
        $thought->description = $request->description;
        $thought->save();
        return $thought;
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
        $thought = Thought::find($id);
        $thought->description = $request->description;
        // $thought->updated_at = Carbon::now(new \DateTimeZone('America/Lima'));
        $thought->save();
        return $thought;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Thought::destroy($id);
    }
}
