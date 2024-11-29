<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbms1;

class dbms extends Controller
{
    public function dbms(Request $result){
        $name =$result->name;
        $email=$result->email;
        $password= $result->password;
        $city = $result->city;
        $gender=$result->gnd;
        $cource=implode(',',$result->get('chk'));
        $photo = $result->file('photo');
        $photo->getClientOriginalName();

        $data = new dbms1;
        $data->name = $name;
        $data->email = $email;
        $data->password = $password;
        $data->city=$city;
        $data->gender=$gender;
        $data->cource=$cource;
        $data->picture=$photo->getClientOriginalName();

        $data->save();

        $path = 'image';
        $photo->move($path,$photo->getClientOriginalName());
        echo"file data  save";
    }

    // show function
    public function dbmsshow(){
        $data = dbms1::all();
                    //view page 
        return view('dbmsshow',compact('data'));
    }


    // delete function

    public function dbmsdelete($id){
        $data = dbms1::find($id);
                            // foldername    //database colum_name
        $path = public_path('image/'.$data->picture);
        unlink($path);

        $data->delete(); //path name
        return redirect('dbmsshow');


    }

    public function dbmsedit($id){
        $data= dbms1::find($id);
                 // editpage name
        return view('editdbms',compact('data'));
    }

    public function dbmsupdate(Request $result){
        $id = $result->id;

        $photo = $result->file('photo');
         $data=dbms1::find($id);

         $data->name=$result->name;
         $data->email=$result->email;
         $data->password=$result->password;
         $data->city=$result->city;
         $data->gender=$result->gnd;
         $data->cource=implode(',',$result->get('chk'));


         if(empty($photo)){
            $data->update();
            return redirect('dbmsshow');
         }
         else{

         
         $path1 = public_path('image/'.$data->picture);
         unlink($path1);

        $data->picture=$photo->getClientOriginalName();
        $path = "image/";
        $photo->move($path,$photo->getClientOriginalName());
    
         $data->update();
         return redirect('dbmsshow');
    }
}

}
