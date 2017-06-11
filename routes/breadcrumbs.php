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

// Categories
Breadcrumbs::register('categories', function($breadcrumbs) {
    $breadcrumbs->push('Categories', route('admin.categories.index'));
});

// Categories
Breadcrumbs::register('create-category', function($breadcrumbs) {
    $breadcrumbs->push('Category', route('admin.categories.create'));
});

// Categories / Furniture
Breadcrumbs::register('edit-category', function($breadcrumbs, $category) {
    $breadcrumbs->parent('categories');
    $breadcrumbs->push($category->name, route('admin.categories.edit', $category->id));
});

// Roles
Breadcrumbs::register('roles', function($breadcrumbs) {
    $breadcrumbs->push('Roles', route('admin.roles.index'));
});

// Roles
Breadcrumbs::register('create-role', function($breadcrumbs) {
    $breadcrumbs->push('Role', route('admin.roles.create'));
});

// Roles / Product-Manager
Breadcrumbs::register('edit-role', function($breadcrumbs, $role) {
    $breadcrumbs->parent('roles');
    $breadcrumbs->push($role->name, route('admin.roles.edit', $role->id));
});

// Users
Breadcrumbs::register('users', function($breadcrumbs) {
    $breadcrumbs->push('Users', route('admin.users.index'));
});

// Users
Breadcrumbs::register('create-user', function($breadcrumbs) {
    $breadcrumbs->push('User', route('admin.users.create'));
});

// Users / Joseph Sarkodie
Breadcrumbs::register('edit-user', function($breadcrumbs, $user) {
    $breadcrumbs->parent('users');
    $breadcrumbs->push($user->name, route('admin.users.edit', $user->id));
});