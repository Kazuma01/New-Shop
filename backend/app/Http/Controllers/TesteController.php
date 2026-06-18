<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(){
        return [
            'name' => 'kazuma',
            'curso' => 'laravel'
        ];
    }
    public function show($id){
        $resposta = [];

        if($id == 1){
            $resposta = [
            "id" => $id,
            "name" => "kazuma",
            "curso" => "Laravel"];
            } else if($id == 2){
                $resposta = [
                "id" => $id,
                "name" => "maria",
                "curso" => "PHP"
            ];
            }
            return $resposta;
    }
}
