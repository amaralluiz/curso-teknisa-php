<?php

namespace App\Http\Controllers;

use App\Models\Dev as Dev;
use App\Http\Resources\Dev as DevResource;
use Illuminate\Http\Request;

class DevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devs = Dev::paginate(100);
        return DevResource::collection($devs);
    }

    public function show($id)
    {
        $dev = Dev::findOrFail( $id );
        return new DevResource( $dev );
    }

    public function store(Request $request)
    {
        $dev = new Dev;
        $dev->name = $request->input('name');
        $dev->email  = $request->input('email');
        $dev->age = $request->input('age');
        $dev->picture = $request->input('picture');
        $dev->programmingLanguages = $request->input('programmingLanguages');

        if( $dev->save() ) {
            return new DevResource( $dev );
        }
    }

    public function update(Request $request)
    {
        $dev = Dev::findOrFail( $request->id);
        $dev->name = $request->input('name');
        $dev->email  = $request->input('email');
        $dev->age = $request->input('age');
        $dev->picture = $request->input('picture');
        $dev->programmingLanguages = $request->input('programmingLanguages');

        if( $dev->save() ) {
            return new DevResource( $dev );
        }
    }

    public function destroy($id)
    {
        $dev = Dev::findOrFail( $id );
        if( $dev->delete() ) {
            return new DevResource( $dev );
        }
    }
}
