<?php

namespace App\Http\Controllers;

use App\Models\Authentication;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    //
    public function dashboard(Request $request){
        $total_income = Expense::where("type_id",1)->sum("amount");
        $total_expense = Expense::where("type_id",2)->sum("amount");
        $balance = Authentication::all();
        $total_balance =  $balance[0]->balance-$total_income+$total_expense;
        return view('dashboard',compact('total_income','total_expense','total_balance'));
    }

}
