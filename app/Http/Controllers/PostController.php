<?php
namespace App\Http\Controllers;
use Illuminate\Http\Requests;

class PostController extends Controller
{
    public function index()
    {
     $posts = [
     'Mon super titre',
     'Mon super second titre'
     ];
     return view('articles', [
        'posts' => $posts]);
 }
public function show($id)
   {
    $posts = [
        1 =­­> 'Mon titre n0 1',
        2 =­­> 'Mon titre n0 2'
    ];
$post =$posts[$id] ;
return view('article',[
    'post' => $post
]);

   }
}

