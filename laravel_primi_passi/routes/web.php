<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'menu' => [
            'Chi siamo', 'Dove andiamo', 'Da dove veniamo', 'Contattaci'
        ],
        'cards' => [
            [
            'img' => "https://source.unsplash.com/user/nature/300x200",
            'title' => 'Titolo',
            'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi perspiciatis commodi cum aperiam tempore debitis maiores facilis quibusdam temporibus totam quasi ad voluptatem quaerat laudantium deserunt vel excepturi, doloribus ratione.'
            ],
            [
                'img' => "https://source.unsplash.com/user/nature/300x200",
                'title' => 'Titolo',
                'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi perspiciatis commodi cum aperiam tempore debitis maiores facilis quibusdam temporibus totam quasi ad voluptatem quaerat laudantium deserunt vel excepturi, doloribus ratione.'
            ],
            [
                'img' => "https://source.unsplash.com/user/nature/300x200",
                'title' => 'Titolo',
                'descrizione' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi perspiciatis commodi cum aperiam tempore debitis maiores facilis quibusdam temporibus totam quasi ad voluptatem quaerat laudantium deserunt vel excepturi, doloribus ratione.'
            ],
        ]
    ];
    return view('home', $data);
});
