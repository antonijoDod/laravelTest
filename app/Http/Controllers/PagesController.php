<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use App\Profile;
use App\Http\Resources\Article as ArticleResources;

class PagesController extends Controller
{
    public function index(){
        
        return Profile::all();
        
    }
}
