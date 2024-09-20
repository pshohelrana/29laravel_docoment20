<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Income;
// use App\Models\ProductCategory;
// use App\Models\ProductBrand;


class IncomeController extends Controller{

   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
      
    //print_r(Product::all());
     return view("pages.income.index",["incomes"=>Income::all()]);
   }

   public function create(){
      return view("pages.income.create"); 
   }

   public function store(Request $request){
      //echo $request->name;
      $r=new Income();
      $r->name=$request->name;
      $r->taka=$request->taka;
      
      $r->updated_at=$request->updated_at;
      $r->created_at=$request->created_at;
      $r->save();

      return redirect()->route("incomes.index")->with('success','Success.');

   }


   public function edit(Income $income){     
      // $categories=ProductCategory::all();
      // $brands=ProductBrand::all();
      return view("pages.income.edit",["income"=>$income]); 
   }

  public function update(Request $request,Income $income){       
      //$role=Role::find($id);
      $income->name=$request->name;
      $income->taka=$request->taka;
      
      $income->updated_at=$request->updated_at;
      $income->created_at=$request->created_at;
      // $product->regular_price=$request->regular_price;
      // $product->offer_price=$request->offer_price;

      $income->update();
      return redirect()->route("incomes.index")->with('success','Success.');
    
  }  


   public function show(Income $income){     
       return view("pages.income.show",["income"=>$income]);
   }

   public function delete($id){ 
      
       $income=Income::find($id);
       //echo $role->id;
       return view("pages.income.delete",["income"=>$income]);
   }

   public function destroy(Income $income){
      $income->delete();
      return redirect()->route("incomes.index")->with('success','Success.');
      
   }

}