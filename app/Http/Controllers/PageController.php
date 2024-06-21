<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'this is the home page';
    }
    public function about(){
        return 'this is the about page';
    }
    public function contact(){
        return 'this is the contact page';
    }
    public function products(){
        return 'This are the products that are sold';
    }
    public function services(){
        return 'This are the services offered';
    }
    public function blog(){
        return 'This is the blog page';
    }

}
