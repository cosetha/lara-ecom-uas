<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request){
        if($request->session()->get('s_status') == "active"){
            $data['session'] = array(
                                    'id'        => $request->session()->get('s_id'),
                                    'name'      => $request->session()->get('s_nama'),
                                    'email'     => $request->session()->get('s_email'),
                                    'password'  => $request->session()->get('s_password'),
                                    'status'    => $request->session()->get('s_status'),
                                    'role'      => $request->session()->get('s_role') 
            );
            // print_r($data);
            $data['title']   = "Dashboard - laracms";
                                return view('dashboard_page', $data);
            $data['nav_menu'] = $this->displayMenu($request);
                                return view('dashboard_page', $data);
        }else {
            return redirect('/login');
        }
    }

    public function signOut(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }

    private function displayMenu(Request $request) {
        $menu = "<ul class='navbar nav'>";
        $result = DB::select("SELECT m.id, m.nama, m.url, r.nama AS role FROM menu AS m LEFT JOIN roles AS r ON m.role_id = r.id WHERE r.nama = ?", [$request->session()->get('s_role')]);
        foreach ($result as $r) {
            $menu .= "<li class='nav-item'><a class='nav-link' href=''>" . $r->nama . "</a></li>";
        }
        $menu .= "</ul>";
        return $menu;
    }

    public function HistoryMenu(Request $request)
    {
       
        $data['result'] = \DB::select("SELECT * FROM nota WHERE tanggal BETWEEN ? and ?",[$request->input('tanggalAwal'),$request->input('tanggalAkhir')]);
        if($data != null){
            $request->session()->put('htr_aw',$request->input('tanggalAwal'));
            $request->session()->put('htr_ak',$request->input('tanggalAkhir'));
        }
        return \view('pages.history',$data);
        
        
    }
    public function History()
    {
        $data['result'] = \DB::select("SELECT * FROM nota");
       return \view('pages.history',$data);
    }
}
