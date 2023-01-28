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

    public function GetExpense(){

            $expenses = Maintenance::latest()->paginate(4);
            return view('admin.expenses.add', compact('expenses'));
    }
}
