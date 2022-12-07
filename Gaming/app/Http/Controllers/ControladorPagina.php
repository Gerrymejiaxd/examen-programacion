<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPagina extends Controller
{
    function Fformulario(){
        return view('formulario');
    }

    function fConsulta(){
        return view('consulta');
    }
    function destroy(){
        DB::table('tb_recuerdos')->where('idRec',$id)->delete();
        return redirect('recuerdo')->with('mensaje',"Recuerdo borrado"); 
        
    }

    function procesarFormulario(Cafe $req){
            return redirect('/formulario')->with('confirmacion','tu formulario se guardo correctamente');
    }
}