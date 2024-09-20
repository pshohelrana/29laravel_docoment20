

@extends('layouts.app')
@section('page')
<style>
 #cmbCustomer{
   padding:5px;
 }
</style>
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Loanactive</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Loanactive</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <form action="#" method="post" >
          @csrf
        <div class="row">
          <div class="col-12">
            <!-- <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div> -->


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <!-- <i class="fas fa-globe"></i> . -->
                    <!-- <small class="float-right">Date: <php echo date("d M Y")?></small> -->
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <!-- <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>ISHOP, Inc.</strong><br>
                    House:12, Road:1<br>
                    Block:E<br>
                    Mobile: 017834433<br>
                    Email: info@ishop.com
                  </address>
                </div> -->
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To Loanapplicant
                  <address>
                    <?php
                      //echo Customer::get_selectbox();
                    ?>
                    <select id="cmbLoanapplicant" name="cmbLoanapplicant">
                    @foreach($loanapplicants as $loanapplicant)
                      <option value="{{$loanapplicant->id}}">{{$loanapplicant->name}}</option>
                    @endforeach
                    </select>
                   <div class="loanapplicant-info"></div>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 
                  <table>
                    <tr><td><b>loanapplicant ID:</b></td><td><input type="text" style="width:60px" value="<?php //echo Order::getLastOrderId()+1;?>"  readonly/></td></tr>
                    <!-- <tr><td><b>Order Date:</b></td><td><input type="text" id="txtOrderDate" value=<php echo date("d-m-Y");?> /></td></tr>
                    <tr><td><b>Due Date:</b></td><td><input type="text" id="txtDueDate" value=<php echo date("d-m-Y");?> /></td></tr> -->
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>SN</th>
                      <th>Loansystem</th>
                      <th>Principle</th>
                      <th>Interest_rate</th>                     
                      <th>Interest</th>
                      <th>Subtotal</th>
                      <th><input type="button" id="clearAll" value="Clear" /></th>
                    </tr>
                    <tr>
                      <th></th>
                      <th>
                        <?php
                         // echo Product::get_selectbox();
                       ?>
                       <select id="cmbLoansystem" name="cmbLoansystem">
                        @foreach($loansystems as $loansystem)
                          <option value="{{$loansystem->id}}">{{$loansystem->name}}</option>
                        @endforeach
                        </select>
                      </th>
                        <th><input type="text" id="txtPrinciple" /></th>
                        <th><input type="text" id="txtInterest_rate" /></th>
                        <th><input type="text" id="txtInterest" /></th>
                        <th></th>
                        <th><input type="button" id="btnAddToCart" value=" + " /></th>
                      </tr>
                    </thead>
                    <tbody  id="items">                    
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <!-- <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="{{asset('asset')}}/dist/img/credit/visa.png" alt="Visa">
                  <img src="{{asset('asset')}}/dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="{{asset('asset')}}/dist/img/credit/american-express.png" alt="American Express">
                  <img src="{{asset('asset')}}/dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   Thank you for shopping
                  </p>
                </div> -->
                <!-- /.col -->
                <!-- <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                     <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td id="subtotal">0</td>
                      </tr> -->
                      <!-- <tr>
                        <th>Tax (5%)</th>
                        <td id="tax">0</td>
                      </tr> -->
                      <!-- <tr>
                        <th>Shipping:</th>
                        <td id="shopping-cost">0</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td id="net-total">0</td>
                      </tr> -->
                    </tbody></table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="submit" id="btnProcessLoanactive" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Process Loanactive </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i>  PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
</form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
      $(function() {  
        
        //Show calander in textbox
        // $("#txtOrderDate").datepicker({dateFormat: 'dd-mm-yy'});
        // $("#txtDueDate").datepicker({dateFormat: 'dd-mm-yy'});

        // printCart();



        //Save into database table
        $("#btnProcessLoanactive").on("click",function(e){
           
            e.preventDefault();            

              let loanapplicant_id=$("#cmbLoanapplicant").val();
              var token = $("input[name='_token']").val();
              var method = $("input[name='_method']").val();
                            
            //   let order_date=$("#txtOrderDate").val();
            //   let due_date=$("#txtDueDate").val();
              let interest=0;
            //   let vat=0;
              let address="na";

              let loansystems=JSON.parse(localStorage.getItem("cart"));

              //console.log(order_date);
              
              $.ajax({
                url:"{{route('loansystems.store')}}",
                type:'POST',               
                data:{
                  _token:token,
                  _method:method,
                  "cmbLoanapplicant":loanapplicant_id,
                //   "txtOrderDate":order_date,
                //   "txtDueDate":due_date,
                  "txtAddress":address,
                  "txtInterest":interest,
                 
                  "txtLoansystems":loansystems
                },
                success:function(res){
                  console.log(res);
                  clearCart();
                  $("#items").html("");
                }
              });
              
             
        });       



        //Show customer other information
        $("#cmbLoansystem").on("change",function(){     
          let id=$(this).val();
           $.ajax({
             url:"{{url('api/loansystems')}}/"+`${id}`,
             type:'GET',
             //data:{"id":$(this).val()},
             success:function(res){
               //console.log(res);
              let loansystem=JSON.parse(res);
               //console.log(product);
              $("#txtPrinciple").val(loansystem.principle);
              $("#txtInterest_rate").val(1);
              $("#txtInterest_rate").focus();
             }
           });
        });   
        
        $("#txtInterest_rate").on("keyup",function(e){           
          if(e.which==13){
            $("#txtInterest").focus();
          }
        });


        //Show customer other information
        $("#cmbLoanapplicants").on("change",function(){          
          let id=$(this).val();  
              
           $.ajax({
             url:"{{url('api/loanapplicants')}}/"+`${id}`,
             type:'GET',
             //data:{"id":$(this).val()},
             success:function(res){
             // let customer=JSON.parse(res);
                console.log(res);
              $(".customer-info").html(res.mobile);
             }
           });
        });      
       
       
    
      
      //Add item to bill temporarily
        $("#btnAddToCart").on("click",function(){
          
          addToCart();
          
        });

        
        // $("#txtDiscount").on("keyup",function(e){           
        //   if(e.which==13){
        //     addToCart();
        //   }
        // });


        $("body").on("click",".delete",function(){
           let id=$(this).data("id");        
           delItem(id)
           printCart();
        });
     
        $("#clearAll").on("click",function(){
          clearCart();
          printCart();
        });


    //------------------Cart Functions----------//      

      function addToCart(){
            let item_id=$("#cmbLoansystem").val(); 
            let name=  $("#cmbLoansystem option:selected").text();          
            let principle=$("#txtPrinciple").val();
            let interst_rate=$("#txtInterest_rate").val();
            let interest=$("#txtInterest").val();
            let total_interest=interest*interest_rate;
            let subtotal=principle*interest_rate-total_interest;
           
            let item={
              "name":name,
              "item_id":item_id,
              "principle":principle,
              "interest_rate":parseFloat(interest_rate),
              "interest":interest,
              'total_interest':total_interest,
              "subtotal":subtotal
            }; 
            
            console.log(item);
            
             save(item);
             printCart();      
      }

       function printCart(){
          let cart= getCart();            
           let sn=1;          
           let $bill="";  
           let subtotal=0;
           $.each(cart,function(i,item){
                //console.log(item.name);
             subtotal+=item.principle*item.interest_rate-item.interest;
             let $html="<tr>";            
             $html+="<td>";
             $html+=sn;
             $html+="</td>";
             $html+="<td>";
             $html+=item.name;
             $html+="</td>";
             $html+="<td data-field='principle'>";
             $html+=item.principle;
             $html+="</td>";
             $html+="<td data-field='interest_rate'>";
             $html+=item.interest_rate;
             $html+="</td>";
             $html+="<td data-field='interest'>";
             $html+=item.total_interest;
             $html+="</td>";
             $html+="<td data-field='subtotal'>";
             $html+=item.subtotal;
             $html+="</td>";
             $html+="<td>";
             $html+="<input type='button' class='delete' data-id='"+item.item_id+"' value='-'/>";
             $html+="</td>";
             $html+="</tr>";
             $bill+=$html;
             sn++;
           });      
                      
           $("#items").html($bill); 

           //Order Summary
           $("#subtotal").html(subtotal);
        //    let tax=(subtotal*0.05).toFixed(2);
        //    $("#tax").html(tax);
        //    $("#net-total").html(parseFloat(subtotal)+parseFloat(tax));
        }
     
      
      
       
       
      

      });
  </script>

  
@endsection


