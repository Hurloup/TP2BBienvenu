<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoloControler extends Controller
{
    public function yolo(){
        Route::get('/yolo', ['App\Http\Controllers\YoloControler', 'publicView']);
    }
}
