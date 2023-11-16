<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
    
        
        $categories=Category::query()
        // ->where('user_id','=',Auth::user()->id)
        ->orderBy('id','desc')
        // ->simplePaginate(10)
        ->get();
        ;
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    
    $validatedData = $request->validate([
        'user_id' => 'required',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    
    ]);

    
    $category = new Category([
        'user_id' => $validatedData['user_id'],
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
        
    ]);

    
    $category->save();

    
    return redirect()->route('categories.index')->with('message','Category: '.$category->name.', Created Successfully');
}

    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        $category->user_id = $validatedData['user_id'];
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];
    
        $category->save();
    
        return redirect()->route('categories.index')->with('message', 'Category: ' . $category->name . ', Updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

    
    return redirect()->route('categories.index')->with('message','Category: '.$category->name.', Deleted Successfully');
    }
}
