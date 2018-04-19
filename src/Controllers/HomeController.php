<?php

namespace Ozparr\AdminTempleta\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        if(class_exists(\Ozparr\AdminLogin\Middleware\RolByLvl::class)){
            $this->middleware('rolByName:Moderador');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function example()
    {
        return view('admin_templeta::templetas.admin.index');
    }

   
}
