<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_book;
use App\Models\contact;
use Redirect;

class UserController extends Controller
{
    public function index(Request $req)
    {

        if($req->session()->has('Login_user'))
        {
            return redirect('/home');
        }
        if($req->login)
        {
            $email = $req->email;
            $password = $req->password;

            $select_data = contact_book::where('email',$email)->where('password',$password)->count();

            if($select_data>0)
            {
                $arr = contact_book::where('email',$email)->where('password',$password)->first();
                session(['Login_user' => $arr['id']]);
                return redirect('/home');
            }
            else
            {
                return redirect('/register_now');
            }
        }

        return view('index');
    }

    public function register(Request $req)
    {
        if($req->register)
        {
            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $password2 = $req->password2;
            $city = $req->city;

            if($password==$password2)
            {
                $insert_data = array('name'=>$name,'email'=>$email,'password'=>$password,'city'=>$city);

                contact_book::create($insert_data);

                return redirect('/register_sucess');
            }
            else
            {
                return redirect('/password_error');
            }
        }
        return view('register');
    }

    public function home(Request $req)
    {
        $id = $req->session()->get('Login_user');

        $arr = contact_book::where('id',$id)->get();

        return view('home',["arr"=>$arr]);
    }

    public function add_contact(Request $req)
    {
        if($req->add_contact)
        {
            $user_id = $req->session()->get('Login_user');
            $name = $req->name;
            $contact = $req->contact;

            $add_contact = array('user_id'=>$user_id,'name'=>$name,'contact'=>$contact);

            contact::create($add_contact);

            return redirect('/add_contact');
        }
        return view('add_contact');
    }

    public function view_contact(Request $req)
    {        
        if($req->search_text)
        {
            $search = $req->search_text;

            $token = $req->_token;

            $id = $req->session()->get('Login_user');

            $arr = contact::where('user_id',$id)->where('name','like','%'.$search.'%')->paginate(3)->appends([
                'search_text' => $search,
            ]);;

            return view('view_contact',['arr'=>$arr]);
        }
        else{

            $id = $req->session()->get('Login_user');

            $arr = contact::where('user_id',$id)->paginate(3);
        
            return view('view_contact',['arr'=>$arr]);
        } 
    }

    public function delete_contact(Request $req,$id)
    {
        $arr = contact::where('id',$id)->delete();

        return redirect()->back();
    }

    public function update(Request $req,$id)
    {
        $arr = contact::where('id',$id)->get();

        return view('edit_contact')->with(array('arr'=>$arr));
    }

    public function update_submit(Request $req,$id)
    {
        if($req->save)
        {
            $name = $req->name;
            $contact = $req->contact;

            $insert_data = array('name'=>$name,'contact'=>$contact);

            contact::where('id',$id)->update($insert_data);

            return redirect('/view_contact');
        }
    }

    public function manage_acc(Request $req)
    {
        $id = $req->session()->get('Login_user');

        $arr = contact_book::where('id',$id)->get();

        return view('/manage_acc',['arr'=>$arr]);
    }

    public function edit_user(Request $req)
    {
        $id = $req->session()->get('Login_user');

        $arr = contact_book::where('id',$id)->get();

        return view('/edit',['arr'=>$arr]);
    }

    public function update_user_details(Request $req)
    {
        if($req->save)
        {
            $id = $req->session()->get('Login_user');
            $name = $req->name;
            $email = $req->email;
            $city = $req->city;

            $update_details = array('name'=>$name,'email'=>$email,'city'=>$city);

            contact_book::where('id',$id)->update($update_details);

            $arr = contact_book::where('id',$id)->get();

            return redirect('/manage_acc');
        }
    }

    public function change_password(Request $req)
    {
        $id = $req->session()->get('Login_user');

        if($req->save)
        {
            $current_pass = $req->curr_pass;

            $pass_check = contact_book::where('id',$id)->where('password',$current_pass)->count();

            if($pass_check>0)
            {
                $password = $req->password;
                $password2 = $req->password2;

                if($password == $password2)
                {
                    if($password == $current_pass)
                    {
                        $msg = "You have already used this password last time...!  _ Please Enter New Password... ";
                        $msg2 = "";
                        return view('/change_pass',['msg'=>$msg],['msg2'=>$msg2]);
                    }
                    $update_pass = array('password'=>$password);

                    contact_book::where('id',$id)->update($update_pass);

                    $msg2 = "Your password has been changed succesfully...! ";
                    $msg = "";

                    return view('/change_pass',['msg2'=>$msg2],['msg'=>$msg]);
                }
                else
                {
                    $msg = "Re-entered new password is not match...!";
                    $msg2 = "";
                    return view('/change_pass',['msg'=>$msg],['msg2'=>$msg2]);
                }
            }
            else
            {
                $msg = "Entered Current password is not match...!  _ Please Enter Correct Current Password... ";
                $msg2 = "";
                return view('/change_pass',['msg'=>$msg],['msg2'=>$msg2]);
            }
        }
    }

    public function delete_checked(Request $req)
    {
        if($req->delete_checked)
        {
            $all_check = $req->checkbox;

            for($i=0; $i<count($all_check); $i++)
            {
                $id = $all_check[$i];
                contact::where('id',$id)->delete();
            }
        }
        
        if(isset($_GET['search_text']))
        {
            $search = $_GET['search_text'];
            return redirect('/view_contact?search_text='.$search);
        }
        else
        {
            return redirect('/view_contact');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->flush();

        return redirect('/');
    }

}