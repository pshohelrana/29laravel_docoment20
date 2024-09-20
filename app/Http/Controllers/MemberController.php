<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
// use App\Models\ProductCategory;
// use App\Models\ProductBrand;


class MemberController extends Controller{

   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
      
    //print_r(Product::all());
     return view("pages.member.index",["members"=>Member::all()]);
   }

   public function create(){
      return view("pages.member.create"); 
   }

   public function store(Request $request){
      //echo $request->name;
      $r=new Member();
      $r->name=$request->name;
      // $r->lastname=$request->lastname;
      // $r->address=$request->address;
      // $r->nid=$request->nid;
      // $r->photo=$request->photo;
      // $r->deposit=$request->deposit;
      // $r->withdraw=$request->withdraw;
      // $r->total_amount=$request->total_amount;
      // $r->updated_at=$request->updated_at;
      // $r->created_at=$request->created_at;
      $r->save();

      return redirect()->route("members.index")->with('success','Success.');

   }


   public function edit(Member $member){     
      // $categories=ProductCategory::all();
      // $brands=ProductBrand::all();
      return view("pages.member.edit",["member"=>$member]); 
   }

  public function update(Request $request,Member $member){       
      //$role=Role::find($id);
      $member->name=$request->name;
      $member->lastname=$request->lastname;
      $member->address=$request->address;
      $member->nid=$request->nid;
      $member->photo=$request->photo;
      $member->deposit=$request->deposit;
      $member->withdraw=$request->withdraw;
      $member->total_amount=$request->total_amount;
      $member->updated_at=$request->updated_at;
      $member->created_at=$request->created_at;
      // $product->regular_price=$request->regular_price;
      // $product->offer_price=$request->offer_price;

      $member->update();
      return redirect()->route("members.index")->with('success','Success.');
    
  }  


   public function show(Member $member){     
       return view("pages.member.show",["member"=>$member]);
   }

   public function delete($id){ 
      
       $member=Member::find($id);
       //echo $role->id;
       return view("pages.member.delete",["member"=>$member]);
   }

   public function destroy(Member $member){
      $member->delete();
      return redirect()->route("members.index")->with('success','Success.');
      
   }

}