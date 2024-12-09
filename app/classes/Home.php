<?php

namespace App\classes;

class Home{
    public function index(){
        return view("home");
    }
    public function about(){
        return view('about');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function gallery(){
        return view('gallery');
    }
    public function contact(){
        return view('contact');
    }
}