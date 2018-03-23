<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;
class personaREST extends Controller
{
    public function get1($id){
        return producto::find($id);
    }
    //create
    public function post1(Request $request){
        return personav::create($request->all);
    }
    //limit list & count search (name)
    public function post2($skip,$take,Request $request){
        $search=$request->input('nombre');
        $persona=array(
            'rows'=>persona::where('nombre','like','%'.$search.'%')->skip($skip)->take($take)->get(),
            'count'=>persona::where('nombre','like','%'.$search.'%')->count(),
        );
        return $persona;
    }
    //update
    public function put($id,Request $request){
        $persona = persona::findOrFail($id);
        $persona->update($request->all());    
        return $persona;
    }
    //delete
    public function delete($id){
        persona::find($id)->delete();
        return 204;
    }
}
