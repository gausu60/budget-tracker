<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    public function index(Request $request){
        $budgets = DB::table('budget')
            ->join('categories', 'categories.categories_id', '=', 'budget.categories_id')
            ->join('type', 'type.type_id', '=', 'budget.type_id')
            ->select('budget.*', 'type.type', 'categories.categories')
            ->get();

        return view('budget', compact('budgets'));
    }
    public function create(){
        $category = Category::all();
        $type = Type::all();
        return view('create-budget',compact('category','type'));
    }
    public function store(Request $request){
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'type_id' => 'required',
            'categories_id' => 'required',
            ]);
            Expense::create($request->all());
            return redirect()->route('budget')->with('successMsg', 'Expense created successfully');
    }
    public function delete($id){
        $expense = Expense::where("budget_id",$id)->delete();
        return redirect()->route('budget')->with('successMsg', 'Expense deleted successfully');
    }
    public function edit($id){
        $expense = Expense::where("budget_id",$id)->get();
        $category = Category::all();
        $type = Type::all();
        return view('edit-budget', compact('expense','category','type'));
    }
    public function update(Request $request){
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'type_id' => 'required',
            'categories_id' => 'required',
            ]);
            $budget_id = $request->post("budget_id");
            Expense::where("budget_id",$budget_id)->update([
                'description' => $request->post("description"),
                'amount' => $request->post("amount"),
                'date' => $request->post("date"),
                'type_id' => $request->post("type_id"),
                'categories_id' => $request->post("categories_id"),

            ]);
            return redirect()->route('budget')->with('successMsg', 'Expense updated successfully');
    }

}
