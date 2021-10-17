<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class CorsController extends Controller
{
    static function Corsinfo(){
        $Itemsid = [];
        for ($i=0;session('cors');$i++){
            array_push($Itemsid,session($i));
        }
        return $Itemsid;
    }

    public function GetChekedItems(){
            //
    }


    public function AddThis(Request $request) {
       if (session('cors')){
           for ($i=0;$i <= session('cors');$i++){

               if (session($i) == $request->id){

                   return 'false';
               }
           }
       }
            session()->increment('cors'  ,  $increment = 1);
            session()->put([session('cors')  => $request->id]);
            return 'true';




    }
    public function clearcors(){
        for ($i=0;$i<= session('cors');$i++){
            session()->forget($i);

        }
        session()->forget('cors');
    }

    public  function getcorsnumber(){
        if (session('cors')){
            function cors(){
                echo (Int) session('cors');
            }
            return cors();
        }
        }
}
