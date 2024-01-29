<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $datos = DB::select(" select * from editors ");

        return view("welcome")->with("datos", $datos);
    }

    public function create(Request $request){
        try {
            $sql = DB::insert(" insert into editors(name,apellido,cargo)values(?,?,?)", [
                $request->name,
                $request->apellido,
                $request->cargo,
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
            $sql = DB::update(" update editors set name=?, apellido=?, cargo=? where id=? ",[
                $request->name,
                $request->apellido,
                $request->cargo,
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
            $sql = DB::delete(" delete from editors where id=$id");
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
        $datos = DB::select(" select * from editors ");

        return view("about")->with("datos", $datos);
    }

}
