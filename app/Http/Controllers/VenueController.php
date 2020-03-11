<?php

namespace App\Http\Controllers;

use Iivannov\Larasquare\Facade\Larasquare;
use Illuminate\Http\Request;

class VenueController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        //    $response = Larasquare::request("venues/categories");
        //  $venues = Larasquare::venues(['near'=>'valletta']);

        //  dd($venues);


        return view('venues.index');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategories()
    {
        $response = Larasquare::request("venues/categories");

        return response()->json(['categories' => $response]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getVenuesByCategory()
    {

        $venues = Larasquare::venues([
            'near' => 'valletta',
            'categoryId' => \request()->input('categoryId'),
            ]);

        return response()->json(['venues' =>  $venues]);

    }
}
