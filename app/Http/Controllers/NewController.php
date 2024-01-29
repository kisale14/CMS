<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        $datos = DB::select(" select * from posts ");

        return view("newi")->with("datos", $datos);
    }

    public function create(Request $request){

         try {
            $sql = $sql = DB::insert(" insert into posts(name,body,date,category)values(?,?,?,?)", [
                $request->name,
                $request->body,
                $request->date,
                $request->category,
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Editor registrado correctamente");
        } else {
            return back()->with("incorrecto","Error al registrar");
        } 
        
    }

    public function update(Request $request){
        try {
            $sql = DB::update(" update posts set name=?, body=?, date=?, category=? where id=? ",[
                $request->name,
                $request->body,
                $request->date,
                $request->category,
                $request->id,
            ]);
            if($sql == 0){
                $sql = 1;
            }
        } catch (\Throwable $th) {
           $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Editor actualizado correctamente");
        } else {
            return back()->with("incorrecto","Error al actualizar");
        }
    }

    public function delete($id){
        try {
            $sql = DB::delete(" delete from posts where id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("correcto","Editor eliminado correctamente");
        } else {
            return back()->with("incorrecto","Error al eliminar");
        }
    }

    public function show(){
        $datos = DB::select(" select * from posts ");

        return view("new")->with("datos", $datos);
    }


}
