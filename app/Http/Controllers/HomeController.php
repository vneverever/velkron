<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $stocksTable = \Lava::DataTable();  // Lava::DataTable() if using Laravel

        $stocksTable->addDateColumn('Day of Week')
            ->addNumberColumn('Projected');

        // Random Data For Example
        for ($a = 1; $a < 7; $a++)
        {
            $rowData = [
                "2016-8-$a", rand(800,1000)
            ];

            $stocksTable->addRow($rowData);
        }

        \Lava::LineChart('Stocks',$stocksTable);

        return view('home');
    }
}
