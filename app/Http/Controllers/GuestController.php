<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller {
    
    public function __construct() {}

    public function index() {
        
        $data['title'] = "Index - E-Commerce";
        return view('guest_dashboard', $data);
    }

    public function login() {
        $data['title'] = "Login to E-Commerce";
        return view('login_page', $data);
    }

    public function loginAction(Request $request) {
        $method = $request->method();
        if($method == "POST") {
            $result = DB::selectOne("SELECT u.id, u.name, u.status, u.email, u.password, r.nama AS role FROM users AS u
            RIGHT JOIN roles AS r ON u.role_id = r.id WHERE u.email=? AND u.password=?", [
                $request->input('email'),
                $request->input('password')
            ]);
            // print_r($result);
            if($result != null) {
                $request->session()->put('s_id', $result->id);
                $request->session()->put('s_nama', $result->name);
                $request->session()->put('s_email', $result->email);
                $request->session()->put('s_password', $result->password);
                $request->session()->put('s_status', $result->status);
                $request->session()->put('s_role', $result->role);

                return redirect('/dashboard');
            }
            else {
                return redirect('login')->with('alert','Password atau Email, Salah!');
            }
        }
        // echo 'login';
        else {
            return redirect('/login');
        }
    }

    public function register(Request $request){
        $data['title'] = "Register to E-commerce";
        return view('register_page', $data);
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required|min:6',
            'confirmation' => 'required|same:password',
        ]);

        $method = $request->method();
        if($method == "POST"){
            DB::insert("INSERT INTO users(role_id, name, email, password, status) VALUES (3, ?, ?, ?, 'active')", [
                $request-> input('name'),
                $request-> input('email'),
                $request-> input('password')
            ]);
            return redirect('/login')->with('alert-success','Kamu berhasil Register');
        }else{
            return redirect('/register');
        }
    }

}