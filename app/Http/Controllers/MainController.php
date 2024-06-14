<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Person;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class MainController extends Controller
{
    public function home()
    {
        // $response=Http::get('https://jsonplaceholder.typicode.com/posts');
        // $data= $response->json();
        return Inertia::render('home');
    }
    public function button()
    {
        return Inertia::render('button');
    }
    public function input()
    {
        return Inertia::render('input');
    }
    public function pagination()
    {
        $data = Person::paginate(2);
        return Inertia::render('pagination')
            ->with('data', $data);
    }
    public function table()
    {
        $data = Person::paginate(4);
        return Inertia::render('table')
            ->with('data', $data);
    }
    public function navbar()
    {
        return Inertia::render('navbar');
    }

    public function kirim()
    {
        $person = Person::find(1);
        // dd();
        Mail::to(users: 'fadhilkn08@gmail.com')->send(new OrderShipped($person));
        return new OrderShipped($person);
    }
}
