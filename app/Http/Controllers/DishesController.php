<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    public function index(){
        $items=Dish::all();
        return view('First.index',['items'=>$items]);
    }

    public function create(Request $request){
        $newTask=$request->input("newTask");
        $newTask2=$request->input("newTask2");
        $newTask3=$request->input("newTask3");


        $task=new Dish();
        $task->title= $newTask;
        $task->content= $newTask2;
        $task->amount= $newTask3;

        $task->save();

        $items=Dish::orderBy('title','asc')->get();
        return view('First.index',['items'=>$items]);
    }

    public function delete(Request $request)
    {
        $taskId = $request->input("taskId");
        $task = Dish::where("id", $taskId)->first();
        $task->delete();
        
        $items = Dish::orderBy('title','asc')->get();
        return view('First.index',['items'=>$items]);
    }
}