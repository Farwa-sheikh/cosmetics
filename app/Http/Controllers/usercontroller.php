<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

 public function sign_up_logic( Request $request ) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->pass;
        $user->save();
        return redirect( '/index' );

    }

  public function sign_in_logic( Request $request ) {
        $req = $request->validate( [
            'email'  => 'required|email',
            'pass' => 'required|string',

        ] );

        $user = User::where( 'email', $req[ 'email' ] )->first();
        if ( $user && hash::check( $req[ 'pass' ], $user ->password ) ) {
            Auth::login( $user );
            return redirect( '/' );
        } else {
            return redirect()->back();
        }
    }



  public function create( Request $request ) {
        $user = new Contact;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->message = $request->text;

        $user->save();

        return redirect()->back()->with( 'abc', 'message sent to admin' );

    }


  public function read() {
        $user = Contact ::all();

        return view( 'admin.admin', compact( 'user' ) );
    }

    public function delete( $id ) {
        $user = Contact::find( $id );
        $user->delete();
        return redirect()->back()->with( 'dlt', 'data deleted' );
    }

    public function updatecontact( $id ) {
        $user = Contact::find( $id );

        return view( 'admin.update', compact( 'user' ) );
    }

    public function editcontact( $id, Request $req ) {

        $contact = Contact::find( $id );
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->message = $req->message;
        $contact->update();

        $user = Contact ::all();

        return view( 'admin.admin', compact( 'user' ) );

    }

    public function userregister(){
    $user = User ::all();

    return view( 'admin.userregister', compact( 'user' ) );

    }

}

