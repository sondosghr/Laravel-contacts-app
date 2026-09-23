<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
   

    public function getContacts()
    {
        $contacts = DB::table('contacts')->orderBy('id')->get();
       return view('index', compact('contacts'));
    }

     public function index()
    {
        return view('index');

        
    }

    public function edit($id){
        
        $contacts = DB::table('contacts')->where('id', $id)->get();
        return view('edit', compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        DB::table('contacts')->where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'category' => $request->input('category'),
        ]);
        return redirect()->route('contact.getContacts');
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        DB::table('contacts')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'category' => $request->input('category'),
        ]);
        return redirect()->route('contact.getContacts');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $contacts = DB::table('contacts')
            ->where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('index', compact('contacts'));
    }

    public function delete($id)
    {
        DB::table('contacts')->where('id', $id)->delete();
        return redirect()->route('contact.getContacts');
    }
}
