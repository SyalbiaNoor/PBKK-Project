<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'article-title-1',
                'title' => 'Article Title 1',
                'author' => 'Bii',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A beatae natus illum? Tempore recusandae fugiat nisi, facilis iusto omnis repellat molestias dicta magnam quos provident voluptatum quisquam sit quas cum.'
            ],
            [
                'id' => 2,
                'slug' => 'article-title-2',
                'title' => 'Article Title 2',
                'author' => 'Bii',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint assumenda consequuntur quidem laboriosam atque. Nesciunt dolorem commodi unde esse consequuntur, officia quo, veritatis temporibus deserunt perspiciatis quidem minima architecto ipsa.'
            ]
            ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Youkoso, Bii!']);
});

Route::get('/article', function () {
    return view('article', ['title' => 'Anime latest funfacts', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug) {

    $articlee = Arr::first(Post::all(), function($articlee) use($slug) {
        return $articlee['slug'] == $slug;
    });

    return view('articlee', ['title' => 'Single post', 'post' => $articlee]);
});

Route::get('/forum', function () {
    return view('forum', ['title' => 'Let\'s hear from others ']);
});

Route::get('/towatch', function () {
    return view('towatch', ['title' => 'Find your what-to-watch anime recommendation here!']);
});