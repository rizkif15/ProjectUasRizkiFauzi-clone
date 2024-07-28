<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View as FacadesView;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PostController extends Controller
{
    // public function landingPage(): View
    // {
    //     //Kirim data post ke view
    //     return view('layouts.landingPage');
    // }

    // public function login(): View
    // {
    //     //Kirim data post ke view
    //     return view('posts.login');
    // }

    // public function register(): View
    // {
    //     //Kirim data post ke view
    //     return view('posts.register');
    // }

    // public function welcome(): View
    // {
    //     //Kirim data post ke view
    //     return view('welcome');
    // }

    public function home(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //Kirim data post ke view
        return view('layouts.home',compact('posts'));
    }

    public function edit($code): View
    {
        //Kirim data post ke view
        $post = Post::findOrFail($code);
        return view('posts.edit', compact('post'));
    }

    public function show($code): View
    {
        //Kirim data post ke view
        $post = Post::findOrFail($code);
        return view('posts.show', compact('post'));
    }

    public function add(): View
    {
        //Kirim data post ke view
        return view('posts.add');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('layouts.landingPage');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'foto' => 'required|file|mimes:jpeg,png,jpg,gif,svg,ico|max:2048'
        ]);

        $post = new Post();
        $post->email = $validate['email'];
        $post->password = $validate['password'];
        $post->nama = $validate['nama'];
        
        if (array_key_exists('foto', $validate)){
            $post->foto = $validate['foto']->store('images','public');
        }

        $post->save();

        return redirect()->route('layouts.home')->with('success','Post created successfully');
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'foto' => 'required|file|mimes:jpeg,png,jpg,gif,svg,ico|max:2048'
        ]);

        $post = Post::findOrFail($id);
        $post->email = $validate['email'];
        $post->password = $validate['password'];
        $post->nama = $validate['nama'];

        if ($request->hasFile('foto')){
            // Delete the old foto
            if ($post->foto){
                Storage::delete('public/' . $post->foto);
            }
            $post->foto = $request->file('foto')->store('images', 'public');
        }

        $post->save();

        return redirect()->route('layouts.home')->with('success','Post updated successfully');
    }

    public function destroy($id){
        $post = Post::findOrFail($id);

        if($post->foto){
            Storage::disk('public')->delete($post->foto);
        }

        $post->delete();

        return redirect()->route('layouts.home')->with('success','Post deleted successfully');
    }

    public function generatePDF(){
        $posts = Post::all();
        $pdf = PDF::loadview('posts.pdf', compact('posts'));
        return $pdf->download('posts.pdf');
    }

}
