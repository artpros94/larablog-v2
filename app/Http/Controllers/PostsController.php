<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Возращает view всез постов пользователя по ID
     */
    public function showUserPosts($id)
    {
        return view('user-posts');
    }

}
