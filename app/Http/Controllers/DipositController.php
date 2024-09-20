<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diposit;


class DipositController extends Controller{

   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
      
    //print_r(Product::all());
     return view("pages.diposit.index",["diposits"=>Diposit::all()]);
   }

   public function create(){
      return view("pages.diposit.create"); 
   }

   public function store(Request $request){
      //echo $request->name;
      $r=new Diposit();
      $r->name=$request->name;
      $r->mobile=$request->mobile;
      $r->address=$request->address;
      $r->principle=$request->principle;
      $r->paid=$request->paid;
      $r->due=$request->due;
      $r->loanactive_id=$request->loanactive_id;
      $r->updated_at=$request->updated_at;
      $r->created_at=$request->created_at;
      $r->save();

      return redirect()->route("diposits.index")->with('success','Success.');

   }


   public function edit(Diposit $diposit){     
     
      return view("pages.diposit.edit",["diposit"=>$diposit]); 
   }

  public function update(Request $request,Diposit $diposit){       
      //$role=Role::find($id);
      $diposit->name=$request->name;
      $diposit->mobile=$request->mobile;
      $diposit->address=$request->address;
      $diposit->principle=$request->principle;
      $diposit->paid=$request->paid;
      $diposit->due=$request->due;
      $diposit->loanactive_id=$request->loanactive_id;
      $diposit->updated_at=$request->updated_at;
      $diposit->created_at=$request->created_at;
      $diposit->update();
      return redirect()->route("diposits.index")->with('success','Success.');
    
  }  


   public function show(Diposit $diposit){     
       return view("pages.diposit.show",["diposit"=>$diposit]);
   }

   public function delete($id){ 
      
       $diposit=Diposit::find($id);
       //echo $role->id;
       return view("pages.diposit.delete",["diposit"=>$diposit]);
   }

   public function destroy(Diposit $diposit){
      $diposit->delete();
      return redirect()->route("diposits.index")->with('success','Success.');
      
   }

}