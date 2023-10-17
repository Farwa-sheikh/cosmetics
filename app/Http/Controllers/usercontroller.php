<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\crud;
use App\Models\Contact;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;


class usercontroller extends Controller
{
   

    function index() {
        return view('user.index');
    }
    function makeup() {
        return view('user.makeup');
    }
    function jewellery() {
        return view('user.jewellery');
    }

    function contact() {
        return view('user.contact');
    }

    function sign_in() {
        return view('user.sign_in');
    }

    function sign_up() {
        return view('user.sign_up');
    }

    function cart() {
        return view('user.cart');
    }

    function checkout() {
        return view('user.checkout');
    }

    function shop() {
        return view('user.shop');
    }

    function product() {
        return view('user.product');
    }

    // function admin() {
    //     return view('admin.admin');
    // }

    // function update() {
    //     return view('admin.update');
    // }
    function dashboard() {
        return view('admin.dashboard');
    }
    function auth_register() {
        return view('admin.auth_register');
    }
    function auth_login() {
        return view('admin.auth_login');
    }
        
    

 public function sign_up_logic( Request $request ) {
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->password = $request->confirmpass;
        $user->save();
        return redirect( '/index' );

    }

  public function sign_in_logic( Request $request ) {
        $req = $request->validate( [
            'email'  => 'required|email',
            'password' => 'required|string',

        ] );

        $users = User::where( 'email', $req[ 'email' ] )->first();
        if ( $users && hash::check( $req[ 'password' ], $users ->password ) ) {
            Auth::login( $users );
            return redirect( '/' );
        } else {
            return redirect()->back();
        }
    }



  public function create( Request $request ) {
        $users = new Contact;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->website = $request->website;
        $users->message = $request->message;


        $users->save();

        return redirect()->back()->with( 'abc', 'message sent to admin' );

    }


  public function read() {
        $users = Contact ::all();

        return view( 'admin.admin', compact( 'user' ) );
    }

    public function delete( $id ) {
        $users = Contact::find( $id );
        $users->delete();
        return redirect()->back()->with( 'dlt', 'data deleted' );
    }

    public function updatecontact( $id ) {
        $users = Contact::find( $id );

        return view( 'admin.update', compact( 'users$users' ) );
    }

    public function editcontact( $id, Request $req ) {

        $contact = Contact::find( $id );
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->website = $req->website;
        $contact->message = $req->message;
        $contact->update();

        $users = Contact ::all();

        return view( 'admin.admin', compact( 'user' ) );

    }

    public function userregister(){
    $users = User ::all();

    return view( 'admin.userregister', compact( 'users$users' ) );

    }


    public function admin(){
        return view("admin.adminlogin");
    }

    public function admin_logic(Request $req){
        $email = $req->email;
        $password = $req->password;
        $login = DB::table("adminlogins")->where(['email' => $email, 'password' => $password])->first();

        if($login != ""){
            return redirect("/admin/dashboard");
        }else{
            return redirect()->back()->with("AdminLoginMessage", "Incorrect Email or Password");
        }
    }
}

