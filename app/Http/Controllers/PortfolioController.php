<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
      
    
    
        return view('portfolio.home');
    }

    public function about()
    {
    

        return view('portfolio.about');
    }

    public function mySkills()
    {
     
     
        return view('portfolio.skills');
    }
    public function projects()
    {
    

        return view('portfolio.projects');
    }

    public function post()
    {
        $posts = \App\Models\Post::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        return view('portfolio.post', compact('posts'));
    }

    public function contact()
    {
     
        return view('portfolio.contact');
    }
}