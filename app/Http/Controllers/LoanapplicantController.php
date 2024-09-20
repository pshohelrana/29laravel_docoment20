<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Loanapplicant;
// use App\Models\LoanapplicantCategory;
// use App\Models\ProductBrand;


class LoanapplicantController extends Controller{

   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
      
    //print_r(Product::all());
     return view("pages.loanapplicant.index",["loanapplicants"=>Loanapplicant::all()]);
   }

   public function create(){
      return view("pages.loanapplicant.create"); 
   }

   public function store(Request $request){
      //echo $request->name;
      $r=new Loanapplicant();
      $r->name=$request->name;
      $r->mobile=$request->mobile;
      $r->address=$request->address;
      $r->nid=$request->nid;
      $r->occupation=$request->occupation;
      $r->nominee_name=$request->nominee_name;
      $r->nominee_account=$request->nominee_account;
      $r->loan_amount=$request->loan_amount;
      $r->interest_rate=$request->interest_rate;
      $r->photo=$request->photo;
      $r->updated_at=$request->updated_at;
      $r->created_at=$request->created_at;
      $r->save();

      return redirect()->route("loanapplicants.index")->with('success','Success.');

   }


   public function edit(Loanapplicant $loanapplicant){     
    //   $categories=ProductCategory::all();
    //   $brands=ProductBrand::all();
      return view("pages.loanapplicant.edit",["loanapplicant"=>$loanapplicant]); 
   }

  public function update(Request $request,Loanapplicant $loanapplicant){       
      //$role=Role::find($id);
      $loanapplicant->name=$request->name;
      $loanapplicant->mobile=$request->mobile;
      $loanapplicant->address=$request->address;
      $loanapplicant->nid=$request->nid;
      $loanapplicant->occupation=$request->occupation;
      $loanapplicant->nominee_name=$request->nominee_name;
      $loanapplicant->nominee_account=$request->nominee_account;
      $loanapplicant->loan_amount=$request->loan_amount;
      $loanapplicant->interest_rate=$request->interest_rate;
      $loanapplicant->photo=$request->photo;
      $loanapplicant->updated_at=$request->updated_at;
      $loanapplicant->created_at=$request->created_at;
    //   $loanapplicant->regular_price=$request->regular_price;
    //   $loanapplicant->offer_price=$request->offer_price;

      $loanapplicant->update();
      return redirect()->route("loanapplicants.index")->with('success','Success.');
    
  }  


   public function show(Loanapplicant $loanapplicant){     
       return view("pages.loanapplicant.show",["loanapplicant"=>$loanapplicant]);
   }

   public function delete($id){ 
      
       $loanapplicant=Loanapplicant::find($id);
       //echo $role->id;
       return view("pages.loanapplicant.delete",["loanapplicant"=>$loanapplicant]);
   }

   public function destroy(Loanapplicant $loanapplicant){
      $loanapplicant->delete();
      return redirect()->route("loanapplicants.index")->with('success','Success.');
      
   }

}