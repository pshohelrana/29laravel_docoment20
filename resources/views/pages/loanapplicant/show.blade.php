@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Show Loanapplicant"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Show Loanapplicant"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$loanapplicant->id</td></tr>";
 echo "<tr><th>Name</th><td>$loanapplicant->name</td></tr>";
 echo "<tr><th>Mobile</th><td>$loanapplicant->mobile</td></tr>";
 echo "<tr><th>Address</th><td>$loanapplicant->address</td></tr>";
 echo "<tr><th>NID</th><td>$loanapplicant->nid</td></tr>";
 echo "<tr><th>Occupation</th><td>$loanapplicant->occupation</td></tr>";
 echo "<tr><th>Nominee_name</th><td>$loanapplicant->nominee_name</td></tr>";
 echo "<tr><th>Nominee_account</th><td>$loanapplicant->nominee_account</td></tr>";
 echo "<tr><th>Loan Amount</th><td>$loanapplicant->loan_amount</td></tr>";
 echo "<tr><th>Interest Rate</th><td>$loanapplicant->interest_rate</td></tr>";
 echo "<tr><th>Photo</th><td>$loanapplicant->photo</td></tr>";
 echo "<tr><th>Updated</th><td>$loanapplicant->updated_at</td></tr>";
 echo "<tr><th>Created</th><td>$loanapplicant->created_at</td></tr>";

//  echo "<tr><th>Offer Price</th><td>$loanapplicant->offer_price</td></tr>";
//  echo "<tr><th>Regular Price</th><td>$loanapplicant->regular_price</td></tr>";
 echo "</table>";
 echo Html::link(["route"=>url("loanapplicants"),"text"=>"Manage"]);
 echo Page::content_close();
 echo Page::body_close();

?>

@endsection