<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        return view('pages.welcome');
    }

    public function contacts() {
        $contact_details = [
            [
                'name' => 'Bianca Pantoja',
                'email' => 'bjrpantoja@gmail.com',
                'contact_no' => '12345'
            ],
            [
                'name' => 'Bianca Pantoja',
                'email' => 'bjrpantoja@gmail.com',
                'contact_no' => '12345'
            ],
        ];
        
        return view('pages.contacts', compact('contact_details'));
    }



    public function test() {
        $name   = 'Bianca Pantoja';
        $names  = ['Mariel Caling', 'Ralph Magbiray', 'Aira Jimena', 'Rechelle Matriz'];
        return view('trial', compact('name', 'names'));
    }
}