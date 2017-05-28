<?php
/**
 * Created by PhpStorm.
 * User: ntimyeboah
 * Date: 28/05/2017
 * Time: 9:08 AM
 */

// Brands
Breadcrumbs::register('brands', function($breadcrumbs) {
    $breadcrumbs->push('Brands', route('admin.brands.index'));
});

// Brands
Breadcrumbs::register('create-brand', function($breadcrumbs) {
    $breadcrumbs->push('Brands', route('admin.brands.create'));
});

// Brands / Samsung
Breadcrumbs::register('edit-brand', function($breadcrumbs, $brand) {
    $breadcrumbs->parent('brands');
    $breadcrumbs->push($brand->name, route('admin.brands.edit', $brand->id));
});