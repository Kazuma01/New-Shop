<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        $dados = [];

        if($id == 1){
            $dados = [
                "id" => $id,
                "name" => "Yunyun",
                "curso" => "Laravel"];
        } else if($id == 2){
            $dados = [
                "id" => $id,
                "name" => "Megumin",
                "curso" => "PHP"
            ];
        } else if($id == 3){
            $dados = [
                "id" => $id,
                "name" => "Aqua",
                "curso" => "JavaScript"
            ];
        }
        return $dados;
    }
}
