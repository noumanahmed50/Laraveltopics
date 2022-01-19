<?php
namespace App\Http\Controllers;
use App\cruduser;
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

   
$data=cruduser::all();

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
       
        
        $new = new cruduser();
        $new->name = $request->name;
        $new->email = $request->email;
        $new->phone = $request->phone;
        //$new->password = bcrypt($request->password);
        $new->save();
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