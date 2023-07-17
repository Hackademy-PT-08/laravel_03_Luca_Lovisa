<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $ricette = [['id'=> 1,'name'=>'Nome 1 Ricetta','type'=>'Primo','min-desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ipsa expedita cupiditate commodi.','ingridients'=>['primo','secondo','terzo','quarto','quinto'],'ricetta'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni odit optio impedit quae numquam et consequatur amet, necessitatibus totam, tempore facere corrupti quidem nulla. Illo, iure vero. Doloribus in necessitatibus pariatur dignissimos ipsa ad, corporis voluptates quam eligendi ex odio vel voluptate eveniet blanditiis rerum quisquam facilis! Optio, animi facilis.'],
    ['id'=> 2,'name'=>'Nome 2 Ricetta','type'=>'Secondo','min-desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ipsa expedita cupiditate commodi.','ingridients'=>['primo','secondo','terzo','quarto','quinto'],'ricetta'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni odit optio impedit quae numquam et consequatur amet, necessitatibus totam, tempore facere corrupti quidem nulla. Illo, iure vero. Doloribus in necessitatibus pariatur dignissimos ipsa ad, corporis voluptates quam eligendi ex odio vel voluptate eveniet blanditiis rerum quisquam facilis! Optio, animi facilis.'],
    ['id'=> 3,'name'=>'Nome 3 Ricetta','type'=>'Dolce','min-desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ipsa expedita cupiditate commodi.','ingridients'=>['primo','secondo','terzo','quarto','quinto'],'ricetta'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni odit optio impedit quae numquam et consequatur amet, necessitatibus totam, tempore facere corrupti quidem nulla. Illo, iure vero. Doloribus in necessitatibus pariatur dignissimos ipsa ad, corporis voluptates quam eligendi ex odio vel voluptate eveniet blanditiis rerum quisquam facilis! Optio, animi facilis.'],
    ['id'=> 4,'name'=>'Nome 4 Ricetta','type'=>'Primo','min-desc'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ipsa expedita cupiditate commodi.','ingridients'=>['primo','secondo','terzo','quarto','quinto'],'ricetta'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni odit optio impedit quae numquam et consequatur amet, necessitatibus totam, tempore facere corrupti quidem nulla. Illo, iure vero. Doloribus in necessitatibus pariatur dignissimos ipsa ad, corporis voluptates quam eligendi ex odio vel voluptate eveniet blanditiis rerum quisquam facilis! Optio, animi facilis.']
    ];


    public function index() {
        return view('homepage',['ricette'=>$this->ricette]);
    }

    public function show($id){
         foreach($this->ricette as $ricetta){
            if($id == $ricetta['id']){
                return view('dettaglio-ricetta',['ricetta'=>$ricetta]);
            }
         }
    }

    public function type($type){
        $tipoRicette=[];
        foreach($this->ricette as $ricetta){
            if($type == $ricetta['type']){
                $tipoRicette[]=$ricetta;
            }
        }
        return view('categoria-ricette',['ricette'=>$tipoRicette]);
    }

}

