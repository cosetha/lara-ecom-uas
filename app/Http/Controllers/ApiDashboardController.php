<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiDashboardController extends Controller
{
    public function __construct()
    {

    }

    public function getLaporanPendapatan(Request $request){
        $result = DB::select("SELECT DATE_FORMAT(tanggal,'%y-%m') AS tgl, SUM(total) AS total FROM nota GROUP BY DATE_FORMAT(tanggal,'%y-%m') ORDER BY tanggal ASC",[]);
        return \response($result);
    }
}
