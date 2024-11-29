<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\signuptbl;

class signupcontroller extends Controller
{
    public function signupcode(Request $result){

        $data = new signuptbl();
        $check = signuptbl::where('email',$result->email)->first();// paticular row
        if($check){
            echo"email id already exist";
        }
        else{

        
        $data->name = $result->name;
        $data->email = $result->email;
        $data->password = $result->password;
        $data->save();
        echo "data save";
        return redirect('login');
        }


    }

    public function logincode(Request $result){
        $email = $result->email;
        $password = $result->password;

        $data=signuptbl::where('email',$email)->first();

        if($data==null){
                echo"data not fetch";
        }
        else{

        

        if($data->email == $email){
            if($data->password == $password){

                    //    sesstion

                    $result->session()->put('email',$email);

                    return redirect('dashboard');
            }
            else{
               echo"password not match";
            }

        }
        else{
            echo"email not match";
        }

    }
}

public function changepasscode(Request $result){
    $email = session()->get('email');

    $data=signuptbl::where('email',$email)->first();

    $opass=$result->oldpass;
    $npass=$result->newpass;
    $cpass=$result->conformpass;


    if($data==null){
             echo"data not fetch";
    }
    else{

        if($data->password==$opass){
            if($npass == $cpass){
               $data->password=$npass;
               $data->update();
               return redirect('login');
            }
           else{
             echo("new and conform password not march");
           }
        }
        else{
            echo"old password not match";
        }

    }

}


public function logout(){
    $email = session()->get('email');
    if(isset($email)){
        session()->flush('email');
        return redirect('login');

    }
    else{
        echo"login failed";
    }
}

public function profile(){
    $email = session()->get('email');

    $data=signuptbl::where('email',$email)->first();
    return view('profile',compact('data'));
}

public function profilecode(Request $result){
    $name = $result->name;
    $city = $result->city;
    $number = $result->num;
    $photo = $result->file('photo');
    $photo->getClientOriginalName();

    $email = session()->get('email');

    $data=signuptbl::where('email',$email)->first();
    $data->name=$name;
    $data->city=$city;
    $data->mobile=$number;
    $data->picture=$photo->getClientOriginalName();
    $path = "image/";
    $photo->move($path,$photo->getClientOriginalName());

    $data->update();
    return redirect('profile');
}

public function forgetpasswordcode(Request $result){
    $email = $result->email;

    $data = signuptbl::where('email',$email)->first();

    if($data==null){
        echo"email not match";
    }
    else{
        $rand = rand(1000,9999);
        $data->otp=$rand;
        $data->update();
        $result->session()->put('otp_email',$email);
             
        return redirect('otp');

    }
}

public function otpcode(Request $result){
    $otp_email = session()->get('otp_email');
    $otp = $result->otp;
    $data = signuptbl::where('otp',$otp)->first();
    if($data==null){
        echo"otp not match";
    }
    else{
        return redirect('cpass');

    }
}


public function cpasscode(Request $result){
    $npass = $result->npass;
    $cpass = $result->cpass;

    $otp_email = session()->get('otp_email');

    $data=signuptbl::where('email',$otp_email)->first();

    if($npass==$cpass){
        $data->password=$npass;
        $data->update();
        return redirect('login');

    }
    else{
        echo"new password and conform poass word not match";
    }
}
}
