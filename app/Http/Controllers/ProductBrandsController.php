<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shopperholic\Entities\ProductBrand;
use App\Jobs\AddProductBrandJob;

class ProductBrandsController extends Controller
{
    /**
     * Display a listing of the brands.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = ProductBrand::paginate();

        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new brand.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = new ProductBrand();

        return view('admin.brands.create', compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            dispatch(new AddProductBrandJob($request));
        } catch (\Exception $e) {
            logger('An error occurred whiles creating a product brand', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);

            flash()->error('An error occurred whiles adding a brand, please try again.');
        }

        flash()->success('Brand successfully added');

        return view('admin.brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param ProductBrand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBrand $brand)
    {
        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductBrand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBrand $brand)
    {
        return view('admin.brand.create', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param ProductBrand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductBrand $brand)
    {
        try {
            dispatch(new AddProductBrandJob($request, $brand));
        } catch (\Exception $e) {
            logger('An error occurred whiles updating brand', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);

            flash()->error('An error occurred whiles updating brand, please try again.');
        }

        flash()->success('Brand successfully updated');

        return view('admin.brand.index');
    }
}