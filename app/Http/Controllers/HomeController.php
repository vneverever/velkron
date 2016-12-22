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
        $visitorsTable = \Lava::DataTable();  // Lava::DataTable() if using Laravel

        $visitorsTable->addDateColumn('Day of Week')
            ->addNumberColumn('Visitors');

        // Random Data For Example
        $sumVisitor = 0;
        for ($a = 1; $a < 8; $a++)
        {
            $val = rand(500,1000);
            $sumVisitor += $val;
            $rowData = [
                "2016-8-$a", $val
            ];

            $visitorsTable->addRow($rowData);
        }

        \Lava::AreaChart('Visitors',$visitorsTable, [
            'legend' => ['position' => 'in']
        ]);

        $earningsTable = \Lava::DataTable();  // Lava::DataTable() if using Laravel

        $earningsTable->addDateColumn('Day of Week')
            ->addNumberColumn('Earnings');

        // Random Data For Example
        $sumEarnings = 0;
        for ($a = 1; $a < 8; $a++)
        {
            $val = rand(0,100);
            $sumEarnings += $val;
            $rowData = [
                "2016-8-$a", $val
            ];

            $earningsTable->addRow($rowData);
        }

        \Lava::AreaChart('Earnings',$earningsTable,[
            'legend' => ['position' => 'in']
        ]);

        $data = array($sumEarnings, $sumVisitor);

        return view('home')->with('data', $data);
    }
}
