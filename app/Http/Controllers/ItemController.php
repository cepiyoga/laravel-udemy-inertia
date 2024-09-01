<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ItemController extends Controller
{
    public function index(){
        return Inertia::render('Items/Index',[
            'items' => ItemModel::all()
        ]);
    }
}
