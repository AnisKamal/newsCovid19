<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Api;

class ApiController extends Controller
{
    public function newsapi(Request $request)
    {
      $liste =  array('ae','ar','at','au','be','bg',
     'br','ca','ch','cn','co','cu','cz','de','eg','fr','gb','gr','hk','hu','id','ie','il',
     'in','it','jp','kr','lt','lv','ma','mx','my','ng','nl','no','nz','ph','pl','pt','ro',
     'rs','ru','sa','se','sg','si','sk','th','tr','tw','ua','us','ve','za');

     $api = new Api;

      if(($_SERVER["REQUEST_METHOD"] == "POST")){
        $country = $_POST['country'];


        $data= $api->getNews($country);

        return view('affichage', ['data' =>$data , 'liste' => $liste]);
      }

      if(empty($country)){

        $data= $api->getAllNewsCovid();
        return view('affichage', ['data' =>$data , 'liste' => $liste]);
      }
    
    }

}
