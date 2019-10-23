<?php 

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class TEsteController extends Controller{

     public function index(Request $req, $n="fulano")
     {
          dd($req->all());
          echo $req->teste;
          echo "<script>alert($req->idade)</script>";
          return "hello word, $n!";
     }

     public function info()
     {
          phpinfo();
     }

     public function home()
     {
          return Redirect('/home');
     }

     public function boaTarde($nome="Fulano")
     {
          return view('boa-tarde', ["nome" => $nome]);
     }

     
}
