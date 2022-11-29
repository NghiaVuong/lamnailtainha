<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Trang chủ', route('home'));
});

// Home > About
Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Về Takumi', route('about'));
});

// Home > Service
Breadcrumbs::for('services', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Các dịch vụ', route('services'));
});

// Home > Portfolio
Breadcrumbs::for('portfolio', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Danh mục', route('portfolio'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});
Breadcrumbs::for('blog.search', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Search', route('blog.search'));
});
Breadcrumbs::for('category.slug', function (BreadcrumbTrail $trail, $slug) {
    $trail->parent('home');
    $trail->push('Category', route('category.slug', $slug));
});
// Home > Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Liên hệ', route('contact'));
});
// Breadcrumbs::for('/blog', function (BreadcrumbTrail $trail, $blog) {
//     $trail->parent('home');
//     $trail->push('Liên hệ', route('blog', $blog->slug ));
// });
Breadcrumbs::for('blogDetails', function (BreadcrumbTrail $trail, $blog) {
    $trail->parent('blog');
    $trail->push('Bài viết', route('blogDetails',$blog ));
});

