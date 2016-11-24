<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class BrandController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {
        $brand = Brand::paginate(15);
        return view('admin.brand.index',[
            'brand' => $brand
        ]);
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit',[
            'brand' => $brand
        ]);
    }

    public function create()
    {
        $brand = new Brand();
        return view('admin.brand.edit',[
            'brand' => $brand
        ]);
    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}
