<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index($page=NULL,$subpage=NULL){
        if($page==null){
            return view('welcome');
        }
        if($subpage==null){
            return view('pages.'.$page);
        }else{
            return view('pages.'.$page.'.'.$subpage);
        }
    }
}
