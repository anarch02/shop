<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubcategoryRequest;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.subcategory.index', [
            'subcategories' => $subcategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.subcategory.action', [
            'categories' => $categories 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SubcategoryRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryRequest $request)
    {
        $data = $request->validated();
        $subcategory = Subcategory::create($data);

        return redirect(route('subcategory.show', $subcategory->id))->with('status', 'Subcategory created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = Subcategory::findOrFail($id);

        return view('admin.subcategory.show', [
            'subcategory' => $subcategory,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $categories = Category::get();

        return view('admin.subcategory.action', [
            'categories' => $categories,
            'subcategory' => $subcategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\SubcategoryRequest;  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoryRequest $request, $id)
    {
        $data = $request->validated();
        $subcategory = Subcategory::findOrFail($id)->update($data);

        return redirect(route('subcategory.show', $subcategory->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategory::destroy($id);

        return redirect(route('subcategory.index'));
    }
}
