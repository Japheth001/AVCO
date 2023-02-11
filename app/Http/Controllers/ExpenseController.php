<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function GetExpense($id){

            $expenses = Maintenance::find($id);
            return view('admin.expenses.add', compact('expenses'));
    }
    public function UpdateExpense(Request $request, $id){
        $update = Maintenance::find($id)->update([
            'expensedate' => $request->expensedate,
            'amount' => $request->amount,
            'location' => $request->location,
            'authority'=>$request->authority,
        ]);

        return Redirect()->route('all.mantain')->with ('success','Expense Updated Successfully!');
    }

    public function AllExpense(){

        // $expenses = Maintenance::latest()->paginate(4);
        // return view('admin.expenses.index', compact('expenses'));

        $expenses = Maintenance::latest()->paginate(4);
        // return view('admin.expenses.index',compact('expenses'));
        return view('admin.expenses.index',compact('expenses'));
        
}
}
