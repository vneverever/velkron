<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 22.12.2016
 * Time: 14:05
 */

namespace app\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ChartsController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function chart1()
    {
        $stocksTable = Lava::DataTable();  // Lava::DataTable() if using Laravel

        $stocksTable->addDateColumn('Day of Month')
            ->addNumberColumn('Projected')
            ->addNumberColumn('Official');

        // Random Data For Example
        for ($a = 1; $a < 30; $a++) {
            $stocksTable->addRow([
                '2015-10-' . $a, rand(800,1000), rand(800,1000)
            ]);
        }

        $chart = Lava::LineChart($stocksTable);

    }
}