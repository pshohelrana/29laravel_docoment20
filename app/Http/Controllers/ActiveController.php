<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Loanapplicant;
use App\Models\Actve;
use App\Models\ActiveDetail;

class ActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actives=Active::all();
        

        return view("pages.active.manage_order",["actives"=>$actives]);
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
        return view("pages.active.create_active",["loanapplicants"=>$loanapplicants,"loansystems"=>$loansystems]);
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
         $active=new Active;
         
        // print_r($order);

           $active->loanapplicant_id=$request->cmbApplicant;
           $active->order_date=date("Y-m-d",strtotime($request->txtActiveDate));
           $active->delivery_date=date("Y-m-d",strtotime($request->txtDueDate));
           $active->address=isset($request->txtAddress)?$request->txtAddress:"NA";
           $active->interest=isset($request->txtInterest)?$request->txtInterest:0;
           
           $active->interest=0;
           $active->amount=0;
                  
           
           $order->save();        
         

        //  //Order Details
        $products=$request->txtProducts; 
        
       // print_r($products);
       
        foreach($products as $product){         
           
            $active_detail=new OrderDetail;         

            $active_detail->active_id=$active->id;
            $active_detail->product_id=$product["item_id"];
            $active_detail->interest_rate=$product["interest_rate"];
            $active_detail->amount=$product["amount"];            
            $active_detail->interest=isset($product["interest"])?$product["interest"]:0;
            

            $active_detail->save();
      }


         //Stock




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Active $active)
    {  
        $active->delete();
        


        //
    }
}
