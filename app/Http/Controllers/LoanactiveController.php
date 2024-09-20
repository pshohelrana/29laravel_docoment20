<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Loanapplicant;
use App\Models\Loanactive;
use App\Models\LoanactiveDetail;

use Illuminate\Support\Facades\Http;

class LoanactiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $loanactives=DB::table("loanactives as o")  
        ->join("loanapplicants as c","c.id","=","o.loanapplicant_id")
        ->select("o.id","c.name as loanapplicant","c.mobile","o.address","o.total_tk")
        ->paginate(10);
        return view("pages.loanactive.index",["loanactives"=>$loanactives]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loanapplicants=DB::table("loanapplicants")->get();
        $loansystems=DB::table("loansystems")->get();

       // print_r($customers);
        return view("pages.loanactive.create",["loanapplicants"=>$loanapplicants,"loansystems"=>$loansystems]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
               
          //print_r($products);
        //Order
         $loanactive=new Loanactive;
         
        // print_r($order);

           $loanactive->customer_id=$request->cmbCustomer;
         
           $loanactive->address=isset($request->txtAddress)?$request->txtAddress:"NA";
           $loanactive->interest=isset($request->txtInterest)?$request->txtInterest:0;
          
          
           $loanactive->total_tk=0;
                
           
           $loanactive->save();        
         

        //  //Order Details
        $loansystems=$request->txtLoansystems; 
        
       // print_r($products);
       
        foreach($loansystems as $loansystem){         
           
            $loanactive_detail=new LoanactiveDetail;         

            $loanactive_detail->loanactive_id=$loanactive->id;
            $loanactive_detail->loansystem_id=$loansystem["item_id"];
            $loanactive_detail->interest_rate=$loansystem["interest_rate"];
            $loanactive_detail->principle=$loansystem["principle"];            
            $loanactive_detail->interest=isset($loansystem["interest"])?$loansystem["interest"]:0;
           

            $loanactive_detail->save();
      }


         //Stock




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loanactive $loanactive)
    {

        $loanapplicant=DB::Table("loanapplicants")->where("id",$loanactive->loanapplicant_id)->first();

        $loansystems=DB::Table("loanactive_details as od")
        ->join("loanapplicants as p","p.id","=","od.loansystem_id")
        ->select("p.name","od.principle","od.interest_rate","od.interst")
        ->where("od.loanactive_id",$loanactive->id)
        ->get();

        //print_r($customer->name);

        return view("pages.loanactive.show",["loanactive"=>$loanactive,"loanapplicant"=>$loanapplicant,"loansystems"=>$loansystems]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loanactive $loanactive)
    {  
        $loanactive->delete();
        


        //
    }
}
