<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyGuyController extends Controller
{
    public function index(Request $req)

    try {
        $req-> validate(
            ['nome' => 'required']
            )
    }

}

?>