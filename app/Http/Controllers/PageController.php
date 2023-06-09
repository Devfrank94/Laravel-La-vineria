<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wine;

class PageController extends Controller
{
public function index()

{
    $wines = Wine::all();
dd($wines);
}
}
