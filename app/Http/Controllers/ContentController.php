<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class ContentController extends Controller
{
    public function __construct()
    {
        
    }

    public function homepage()
    {
        return response()->view('content.home');
    }

    public function about()
    {
        return response()->view('content.about');
    }
    
    public function client()
    {
        return response()->view('content.client');
    }

    public function contact()
    {
        return response()->view('content.contact');
    }

    /**
     * Search method handler to handling search
     * request and it also check session to define
     * which languange should be displayed on the result
     *
     * @access public
     * @return
     */
    public function search()
    {
        return response()->view('content.search');
    }
}