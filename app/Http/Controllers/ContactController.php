<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $contacts = Contact::query()
            ->where('user_id', '=', Auth::user()->id)
            ->orderBy('id', 'desc')
            // ->simplePaginate(10)
            ->get();


        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->pluck('name', 'id');

        return view('admin.contacts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $contact = new Contact([
            'user_id' => $validatedData['user_id'],
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'lastname' => $validatedData['lastname'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'email' => $validatedData['email'],
        ]);

        $contact->save();

        return redirect()->route('contacts.index')->with('message', 'Contact: ' . $contact->name . ', Created Successfully');
    }

    public function edit(Contact $contact)
    {
        $categories = Category::query()
            ->orderBy('name', 'asc')
            ->pluck('name', 'id');

        return view('admin.contacts.edit', compact('categories', 'contact'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $contact = Contact::findOrFail($id);

        $contact->user_id = $validatedData['user_id'];
        $contact->category_id = $validatedData['category_id'];
        $contact->name = $validatedData['name'];
        $contact->lastname = $validatedData['lastname'];
        $contact->phone = $validatedData['phone'];
        $contact->address = $validatedData['address'];
        $contact->email = $validatedData['email'];

        $contact->save();

        return redirect()->route('contacts.index')->with('message', 'Contact: ' . $contact->name . ', Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('message', 'Contact: ' . $contact->name . ', Deleted Successfully');
    }
}
