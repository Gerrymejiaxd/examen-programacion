<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\validadorForm1;

class controladorBD extends Controller
{
    public function destroy($id)
    {
        DB::table('tb_recuerdos')->where('idRec',$id)->delete();
        return redirect('recuerdo')->with('mensaje',"Recuerdo borrado"); 
    }
    public function confirm($id)
    {
        $recuerdoid=DB::table('tb_recuerdos')->where('idRec',$id)->first();
        return view('confirmElim',compact('recuerdo'));
    }
}
