<?php

namespace App\Http\Controllers;

use Shopperholic\Entities\ProductBrand;
use App\Jobs\AddProductBrandJob;
use Shopperholic\Exceptions\ConflictWithExistingRecord;
use Illuminate\Http\Request;

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
     * Store a newly created brand in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            dispatch(new AddProductBrandJob($request));
        } catch (\Exception $e) {
            if ($e instanceof ConflictWithExistingRecord) {
                logger('User tried to add a brand that already exists', [
                    'user' => $request->user(),
                ]);

                flash()->error('Brand already exists');

                return back()->withInput();
            }

            logger('An error occurred whiles creating a brand', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);

            flash()->error('An error occurred whiles creating a brand, please try again.');

            return back()->withInput();
        }

        flash()->success('Brand successfully added');

        return redirect()->route('admin.brands.index');
    }

    /**
     * Display the specified brand.
     *
     * @param ProductBrand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBrand $brand)
    {
        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified brand.
     *
     * @param ProductBrand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBrand $brand)
    {
        return view('admin.brands.create', compact('brand'));
    }

    /**
     * Update the specified brand in storage.
     *
     * @param Request $request
     * @param ProductBrand $brand
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, ProductBrand $brand)
    {
        try {
            dispatch(new AddProductBrandJob($request, $brand));
        } catch (\Exception $e) {
            logger('An error occurred whiles updating brand', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);

            flash()->error('An error occurred whiles updating brand, please try again.');

            return back()->withInput();
        }

        flash()->success('Brand successfully updated');

        return redirect()->route('admin.brands.index');
    }
}
