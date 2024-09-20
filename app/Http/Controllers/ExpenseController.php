<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Expense;
// use App\Models\ProductCategory;
// use App\Models\ProductBrand;


class ExpenseController extends Controller{

   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
      
    //print_r(Product::all());
     return view("pages.expense.index",["expenses"=>Expense::all()]);
   }

   public function create(){
      return view("pages.expense.create"); 
   }

   public function store(Request $request){
      //echo $request->name;
      $r=new Expense();
      $r->name=$request->name;
      $r->paid_taka=$request->paid_taka;
      $r->unpaid_taka=$request->unpaid_taka;
      $r->remark=$request->remark;
      
      $r->updated_at=$request->updated_at;
      $r->created_at=$request->created_at;
      $r->save();

      return redirect()->route("expenses.index")->with('success','Success.');

   }


   public function edit(Expense $expense){     
      // $categories=ProductCategory::all();
      // $brands=ProductBrand::all();
      return view("pages.expense.edit",["expense"=>$expense]); 
   }

  public function update(Request $request,Expense $expense){       
      //$role=Role::find($id);
      $expense->name=$request->name;
      $expense->paid_taka=$request->paid_taka;
      $expense->unpaid_taka=$request->unpaid_taka;
      $expense->remark=$request->remark;
     
      $expense->updated_at=$request->updated_at;
      $expense->created_at=$request->created_at;
      // $product->regular_price=$request->regular_price;
      // $product->offer_price=$request->offer_price;

      $expense->update();
      return redirect()->route("expenses.index")->with('success','Success.');
    
  }  


   public function show(Expense $expense){     
       return view("pages.expense.show",["expense"=>$expense]);
   }

   public function delete($id){ 
      
       $expense=Expense::find($id);
       //echo $role->id;
       return view("pages.expense.delete",["expense"=>$expense]);
   }

   public function destroy(Expense $expense){
      $expense->delete();
      return redirect()->route("expenses.index")->with('success','Success.');
      
   }

}