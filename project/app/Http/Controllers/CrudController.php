<?php
namespace App\Http\Controllers;

use App\blog;
use App\cruduser;
use App\Info;
use Illuminate\Http\Request;
class CrudController extends Controller
{
//
public function main()
{
return view('main');
}
//user list
function readdata()
{   
$data=cruduser::get();

return view('crud.read',[ 'members' => $data]);
}

 //add user
function user_form()
    {
        
        return view ('crud.create');


    }
//submit user
    function user_submit(Request $request)
    {
       $request->validate([
           'name'=>'required|regex:/^[a-zA-Z]+$/u|max:255|unique:crudusers,name,',
           'email'=>'required|email|unique:crudusers,email,'
        
           
       ]);
       
       if($request->hasfile('image')) {
            foreach($request->file('image') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $imgData[] = $name;  
                
            }
        }
        

        $fileModal = new cruduser();
        $fileModal->name = $request->name;
        $fileModal->email = $request->email;
        // $fileModal->phone = $request->phone; 
           
        $fileModal->image = json_encode($imgData);  
        $fileModal->save();
       
        $user_info = new Info();
        $user_info->user_id = $fileModal->id;
        $user_info->country = $request->country;
        $user_info->save();

        $user_post = new blog();
        $user_post->user_id = $fileModal->id;
        $user_post->title = $request->title;
        $user_post->post = $request->post;        
        $user_post->city = $request->city;
        $user_post->save();
         
        return redirect('user-list');
  }
   
   
//edit user

    function user_edit($id)
{
    $data = cruduser::find($id);
    return view('crud.edit',compact('data'));
}


//update user

function user_update(Request $req)
{

$data = cruduser::find($req->id);

$data->name =  $req->name;
$data->email = $req->email;
$data->phone = $req->phone;
$data->image = $req->image;

$data->save();
return redirect('user-list');
}


// User Delete
    function user_delete($id)
    {
        $data = cruduser::find($id);
        $data->delete();
        return redirect ('user-list');
    }

}