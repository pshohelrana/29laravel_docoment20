@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Show Withdraw"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Show Withdraw"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$withdraw->id</td></tr>";
 echo "<tr><th>Name</th><td>$withdraw->name</td></tr>";
 echo "<tr><th>Policy</th><td>$withdraw->policy</td></tr>";
 echo "<tr><th>Lastname</th><td>$withdraw->lastname</td></tr>";
 echo "<tr><th>Loanamount</th><td>$withdraw->loanamount</td></tr>";
 echo "<tr><th>Interest Rate</th><td>$withdraw->interest_rate</td></tr>";
 echo "<tr><th>Net Amount</th><td>$withdraw->net_amount</td></tr>";
 echo "<tr><th>Updated At</th><td>$withdraw->updated_at</td></tr>";
 echo "<tr><th>Created At</th><td>$withdraw->created_at</td></tr>";
 echo "<tr><th>Member Id</th><td>$withdraw->member_id</td></tr>";
 
//  echo "<tr><th>Offer Price</th><td>$withdrow->offer_price</td></tr>";
//  echo "<tr><th>Regular Price</th><td>$product->regular_price</td></tr>";
 echo "</table>";
 echo Html::link(["route"=>url("withdraws"),"text"=>"Manage"]);
 echo Page::content_close();
 echo Page::body_close();

?>

@endsection