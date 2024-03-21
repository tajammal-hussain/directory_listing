<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/general_settings', function () {
    return view('pages.settings.general_settings');
})->name('general_settings');

Route::get('/payment_settings', function () {
    return view('pages.settings.payment_settings');
})->name('payment_settings');

Route::get('/social_media', function () {
    return view('pages.settings.social_media');
})->name('social_media');

Route::get('/admin-panel-text', function () {
    return view('pages.language_settings.admin-panel-text');
})->name('admin-panel-text');

Route::get('/menu-change', function () {
    return view('pages.language_settings.menu-change');
})->name('menu-change');

Route::get('/notification-text', function () {
    return view('pages.language_settings.notification-text');
})->name('notification-text');

Route::get('/website-text', function () {
    return view('pages.language_settings.website-text');
})->name('website-text');

Route::get('/about', function () {
    return view('pages.page-settings.about');
})->name('about');

Route::get('/blog_2', function () {
    return view('pages.page-settings.blog_2');
})->name('blog_2');

Route::get('/contact', function () {
    return view('pages.page-settings.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('pages.page-settings.faq');
})->name('faq');

Route::get('/home', function () {
    return view('pages.page-settings.home');
})->name('home');

Route::get('/listing', function () {
    return view('pages.page-settings.listing');
})->name('listing');

Route::get('/listing_location', function () {
    return view('pages.page-settings.listing_location');
})->name('listing_location');

Route::get('/listing_category', function () {
    return view('pages.page-settings.listing_category');
})->name('listing_category');

Route::get('/listing', function () {
    return view('pages.page-settings.listing');
})->name('listing');

Route::get('/other', function () {
    return view('pages.page-settings.other');
})->name('other');

Route::get('/pricing', function () {
    return view('pages.page-settings.pricing');
})->name('pricing');

Route::get('/privacy_policy', function () {
    return view('pages.page-settings.privacy_policy');
})->name('privacy_policy');

Route::get('/terms', function () {
    return view('pages.page-settings.terms');
})->name('terms');

Route::get('/add_blog', function () {
    return view('pages.blog-section.add_blog');
})->name('add_blog');

Route::get('/approved_comments', function () {
    return view('pages.blog-section.approved_comments');
})->name('approved_comments');

Route::get('/blog_sec', function () {
    return view('pages.blog-section.blog_sec');
})->name('blog_sec');

Route::get('/categories', function () {
    return view('pages.blog-section.categories');
})->name('categories');

Route::get('/categories_add', function () {
    return view('pages.blog-section.categories_add');
})->name('categories_add');

Route::get('/pending_comments', function () {
    return view('pages.blog-section.pending_comments');
})->name('pending_comments');

Route::get('/faq-web', function () {
    return view('pages.website-section.faq-web');
})->name('faq-web');
Route::get('/add_faq', function () {
    return view('pages.website-section.add_faq');
})->name('add_faq');

Route::get('/add_amenity', function () {
    return view('pages.listing-section.add_amenity');
})->name('add_amenity');

Route::get('/add_lis_category', function () {
    return view('pages.listing-section.add_lis_category');
})->name('add_lis_category');

Route::get('/lis_amenity', function () {
    return view('pages.listing-section.lis_amenity');
})->name('lis_amenity');

Route::get('/lis_category', function () {
    return view('pages.listing-section.lis_category');
})->name('lis_category');

Route::get('/lis_location', function () {
    return view('pages.listing-section.lis_location');
})->name('lis_location');

Route::get('/add_lis_location', function () {
    return view('pages.listing-section.add_lis_location');
})->name('add_lis_location');

Route::get('/listing1', function () {
    return view('pages.listing-section.listing1');
})->name('listing1');

Route::get('/add_listing', function () {
    return view('pages.listing-section.add_listing');
})->name('add_listing');

Route::get('/admin_review', function () {
    return view('pages.review-section.admin_review');
})->name('admin_review');

Route::get('/customer_review', function () {
    return view('pages.review-section.customer_review');
})->name('customer_review');

Route::get('/add_cus_review', function () {
    return view('pages.review-section.add_cus_review');
})->name('add_cus_review');

Route::get('/email_template', function () {
    return view('pages.email_template');
})->name('email_template');

Route::get('/manage_roles', function () {
    return view('pages.manage_roles');
})->name('manage_roles');

Route::get('/add_role', function () {
    return view('pages.add_role');
})->name('add_role');

Route::get('/package_section', function () {
    return view('pages.package_section');
})->name('package_section');

Route::get('/add_package', function () {
    return view('pages.add_package');
})->name('add_package');

Route::get('/pur_history', function () {
    return view('pages.pur_history');
})->name('pur_history');

Route::get('/staff', function () {
    return view('pages.staff');
})->name('staff');

Route::get('/add_staff', function () {
    return view('pages.add_staff');
})->name('add_staff');

Route::get('/customer', function () {
    return view('pages.customer');
})->name('customer');

Route::get('/add_social_media', function () {
    return view('pages.settings.add_social_media');
})->name('add_social_media');

Route::get('/add_customer', function () {
    return view('pages.add_customer');
})->name('add_customer');




