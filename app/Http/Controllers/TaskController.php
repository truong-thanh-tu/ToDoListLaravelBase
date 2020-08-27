<?php

namespace App\Http\Controllers;

use App\Model\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Hien thị trang con task
     */

    public function showTask()
    {
          $getDataTasks = Tasks::orderBy('created_at','desc')
               ->get();
        return view('Page.tasks',compact('getDataTasks'));
    }

    /**
     * Sử lý form task gui den
     */
    public function postAddTask(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => 'Please enter name',
            'name.max' => 'Name absurd',
        ]);

        $objTask = new Tasks();
        $objTask->name = $request->name;
        $objTask->save();
        return redirect('/');
    }
    /**
     * Su ly ham xoa task
     */
    public function deleteTask($taskID)
    {
        Tasks::where('task_id',$taskID)->delete();
        return redirect('/');
    }

}
