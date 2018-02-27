<?php

namespace App\Http\Controllers;

use App\Jobs\AddProductCategoryJob;
use Illuminate\Http\Request;
use Shopperholic\Entities\ProductCategory;
use Shopperholic\Exceptions\ConflictWithExistingRecord;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::paginate();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new ProductCategory();
        $parentCategories = ProductCategory::all();

        return view('admin.categories.create', compact('category', 'parentCategories'));
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            dispatch(new AddProductCategoryJob($request));
        } catch (\Exception $e) {
            if ($e instanceof ConflictWithExistingRecord) {
                logger('User tried to add a category that already exists', [
                    'user' => $request->user()
                ]);

                flash()->error('Category already exists');

                return back()->withInput();
            }

            logger('An error occurred whiles adding a category', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);

            flash()->error('An error occurred whiles adding a category');

            return back()->withInput();
        }

        flash()->success('Category successfully added');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified category.
     *
     * @param ProductCategory $category
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param ProductCategory $category
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $category)
    {
        $parentCategories = ProductCategory::all();

        return view('admin.categories.create', compact('category', 'parentCategories'));
    }

    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param ProductCategory $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $category)
    {
        try {
            dispatch(new AddProductCategoryJob($request, $category));
        } catch (\Exception $e) {
            logger('An error occurred whiles updating a category', [
                'message' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()]);

            flash()->error('An error occurred whiles updating the category');

            return back()->withInput();
        }

        flash()->success('Category successfully updated');

        return redirect()->route('admin.categories.index');
    }
}
