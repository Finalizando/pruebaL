<?php

namespace PruebaLara\Http\Controllers;

use Illuminate\Http\Request;

use PruebaLara\Http\Requests;
use PruebaLara\Http\Controllers\Controller;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde Controller";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nombre($nombre)
    {
        //
        return "Hola mi nombre es: ".$nombre;
    }

    
}
