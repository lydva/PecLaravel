<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAll(){
        return DB::table('author')->get();
    }
}