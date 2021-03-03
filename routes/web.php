<?php

/*-- Front Site Start*/
Route::get('/','FrontController@index')->name('/');
Route::get('/category/category-product','FrontController@categoryProduct')->name('category-product');
Route::get('/category/product-detail','FrontController@productDetail')->name('product-detail');
Route::get('/contact/contact-page','FrontController@contact')->name('contact');
/*-- Front Site End*/

/*-- Admin Site Start*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*-- Slider Section Start --*/
Route::get('/slider/add-slider','SliderController@addSlider')->name('add-slider');
Route::post('/slider/save-slider','SliderController@saveSlider')->name('save-slider');
Route::get('/slider/manage-slider','SliderController@manageSlider')->name('manage-slider');
Route::get('/slider/unpublished-slider/{id}','SliderController@unpublishedSlider')->name('unpublished-slider');
Route::get('/slider/published-slider/{id}','SliderController@publishedSlider')->name('published-slider');
Route::get('/slider/edit-slider/{id}','SliderController@editSlider')->name('edit-slider');
Route::post('/slider/update-slider','SliderController@updateSlider')->name('update-slider');
Route::post('/slider/delete-slider','SliderController@deleteSlider')->name('delete-slider');

/*-- Slider Section End --*/

/*-- Category Section Start--*/
Route::get('/category/add-category','CategoryController@index')->name('add-category');
Route::post('/category/save-category','CategoryController@saveCategory')->name('save-category');
Route::get('/category/manage-category','CategoryController@manageCategory')->name('manage-category');
Route::get('/category/unpublished-category/{id}','CategoryController@unpublishedCategory')->name('unpublished-category');
Route::get('/category/published-category/{id}','CategoryController@publishedCategory')->name('published-category');
Route::get('/category/edit-category/{id}','CategoryController@editCategory')->name('edit-category');
Route::post('/category/update-category','CategoryController@updateCategory')->name('update-category');
Route::post('/category/delete-category','CategoryController@deleteCategory')->name('delete-category');

/*-- Category Section End--*/

/*-- SubCategory Section Start--*/
Route::get('/subcategory/add-subcategory','SubCategoryController@addSubcategory')->name('add-subcategory');

Route::get('/subcategory/manage-subcategory','SubCategoryController@manageSubcategory')->name('manage-subcategory');
/*-- SubCategory Section End--*/

/*-- Brand Section Start--*/
Route::get('/brand/add-brand','BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand','BrandController@saveBrand')->name('save-brand');
Route::get('/brand/manage-brand','BrandController@manageBrand')->name('manage-brand');
Route::get('/brand/unpublished-brand/{id}','BrandController@unpublishedBrand')->name('unpublished-brand');
Route::get('/brand/published-brand/{id}','BrandController@publishedBrand')->name('published-brand');
Route::get('/brand/edit-brand/{id}','BrandController@editBrand')->name('edit-brand');
Route::post('/brand/update-brand','BrandController@updateBrand')->name('update-brand');
Route::post('/brand/delete-brand','BrandController@deleteBrand')->name('delete-brand');
/*-- Brand Section End--*/
/*-- Product Section Start--*/
Route::get('/product/add-product','ProductController@addProduct')->name('add-product');
Route::get('/product/manage-product','ProductController@manageProduct')->name('manage-product');
/*-- Product Section End--*/

/*-- Admin Site End*/
