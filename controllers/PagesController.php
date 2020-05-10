<?php
class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos'); // Model

        return view('index',['tasks'=>$tasks]); // View
    }

    public function contact()
    {
        $users = App::get('database')->selectAll('users');
        return view('contact',['users'=>$users]);
    }

    public function about()
    {
        $company="Laracast";
        return view('about',['company'=>$company]);
    }
}
