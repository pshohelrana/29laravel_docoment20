<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Withdraw;
// use App\Models\ProductCategory;
// use App\Models\ProductBrand;


class WithdrawController extends Controller{

   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
      
    //print_r(Product::all());
     return view("pages.withdraw.index",["withdraws"=>Withdraw::all()]);
   }

   public function create(){
      return view("pages.withdraw.create"); 
   }

   public function store(Request $request){
      // echo $request->name;
      $r=new Withdraw();
      $r->name=$request->name;
      $r->policy=$request->policy;
      $r->lastname=$request->lastname;
      $r->loanamount=$request->loanamount;
      $r->interest_rate=$request->interest_rate;
      $r->net_amount=$request->net_amount;
      // $r->updated_at=$request->updated_at;
      // $r->created_at=$request->created_at;
      $r->member_id=$request->member_id;
      $r->save();

      return redirect()->route("withdraws.index")->with('success','Success.');

   }


   public function edit(Withdraw $withdraw){     
    //   $categories=ProductCategory::all();
    //   $brands=ProductBrand::all();
      return view("pages.withdraw.edit",["withdraw"=>$withdraw]); 
   }

  public function update(Request $request,Withdraw $withdraw){       
      //$role=Role::find($id);
      $withdraw->name=$request->name;
      $withdraw->policy=$request->policy;
      $withdraw->lastname=$request->lastname;
      $withdraw->loanamount=$request->loanamount;
      $withdraw->interest_rate=$request->interest_rate;
      $withdraw->net_amount=$request->net_amount;
      // $withdrow->updated_at=$request->updated_at;
      // $withdrow->created_at=$request->created_at;
      $withdraw->member_id=$request->member_id;
    //   $product->regular_price=$request->regular_price;
    //   $product->offer_price=$request->offer_price;

      $withdraw->update();
      return redirect()->route("withdraws.index")->with('success','Success.');
    
  }  


   public function show(Withdraw $withdraw){     
       return view("pages.withdraw.show",["withdraw"=>$withdraw]);
   }

   public function delete($id){ 
      
       $withdraw=Withdraw::find($id);
       //echo $role->id;
       return view("pages.withdraw.delete",["withdraw"=>$withdraw]);
   }

   public function destroy(Withdraw $withdraw){
      $withdraw->delete();
      return redirect()->route("withdraws.index")->with('success','Success.');
      
   }

}