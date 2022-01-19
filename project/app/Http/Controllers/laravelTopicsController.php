<?php

namespace App\Http\Controllers;
use App\laravelTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\mymail;
class laravelTopicsController extends Controller
{
    //laravel topics cruds
    function topics(){
        return view('laravelTopics.addTopics');
    }
    function submit_topics(Request $request){
        $new = new laravelTopic();
        $new->topic_name = $request->topic_name;
        $new->topic_dis = $request->topic_dis;
        $new->save();
        return redirect ('read-topics');
    }

    function read_topics()
    {   
        $data=laravelTopic::paginate(5);
        return view('laravelTopics.readTopics',[ 'members' => $data]);
    }

    function edit_topics($id)
    {
    $data = laravelTopic::find($id);
    return view('laravelTopics.editTopic',compact('data'));
    }

    function update_topics(Request $req)
    {

    $data = laravelTopic::find($req->id);

    $data->topic_name =  $req->topic_name;
    $data->topic_dis = $req->topic_dis;
    $data->save();
    return redirect('read-topics');
    }
    function delete_topics($id)
    {
        $data = laravelTopic::find($id);
        $data->delete();
        return redirect ('read-topics');
    }
//validation funcs
    function validation_form(){
        return view('laravelTopics.validation');
    }
    function save_data(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        return $request->input();
    }
//uploading File
    function upload_file(Request $req){
        return $req->file('file')->store('uploded files from projet');
    }
//Query-Builders-Function
    function query_insert(){
        return DB::table('querybuilder')
        ->insert(['name'=>'nouman','address'=>'Dk hafiz']);
    }
    function query_read(){
        return DB::table('querybuilder')
        ->get();
    }
    function query_update(){
        return DB::table('querybuilder')
        ->where('id','2')->update(['name'=>'wahid','address'=>'i-10']);
    }
    function query_search(){
        return DB::table('querybuilder')
        ->where('id','2')->get();
    }
    function query_delete(){
        return DB::table('querybuilder')
        ->where('id','3')->delete();
    }
    function join(){
        return DB::table('employees')
        ->select('companies.id')
        ->where('employees.id','=','2')
        ->join('companies','employees.id','=','companies.employee_id')->get();
    }
    //Relations joins
    function onetoone(){
        return model1Name::find(id)->table1Name;
    }
    //Route Model Binding
    function bindng(laravelTopic $key){
        return $key;
    }

    //markdown mail template
    function mail(){
        return new mymail();
    }
}

