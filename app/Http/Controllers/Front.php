<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Front extends Controller
{

    public function index()
    {
        return 'Index page!';
    }

    public function products()
    {
        return 'This is product page!';
    }

    public function product_details($id)
    {
        return 'This is product details page!';
    }

    public function product_categories()
    {
        return 'This is product categories!';
    }

    public function product_brands()
    {
        return 'This is product brands!';
    }

    public function blog()
    {
        return 'This is blog!';
    }

    public function blog_post($id)
    {
        return 'This is blog post!';
    }

    public function contacu_us()
    {
        return 'This is contacu us!';
    }

    public function login()
    {
        return 'This is login!';
    }

    public function logout()
    {
        return 'This is logout!';
    }

    public function cart()
    {
        return 'This is cart!';
    }

    public function checkout()
    {
        return 'This is checkout!';
    }

    public function search($query)
    {
        return "$query serch page!";
    }



}
