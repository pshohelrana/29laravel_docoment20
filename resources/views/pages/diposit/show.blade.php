@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Show Diposit"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Show Diposit"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$diposit->id</td></tr>";
 echo "<tr><th>Name</th><td>$diposit->name</td></tr>";
 echo "<tr><th>Mobile</th><td>$diposit->mobile</td></tr>";
 echo "<tr><th>Address</th><td>$diposit->address</td></tr>";
 echo "<tr><th>Principle</th><td>$diposit->principle</td></tr>";
 echo "<tr><th>Paid</th><td>$diposit->paid</td></tr>";
 echo "<tr><th>Due</th><td>$diposit->due</td></tr>";
 echo "<tr><th>Loanactive Id</th><td>$diposit->loanactive_id</td></tr>";
 
 echo "<tr><th>Updated at</th><td>$diposit->updated_at</td></tr>";
 echo "<tr><th>creatd at</th><td>$diposit->created_at</td></tr>";
 
//  echo "<tr><th>Offer Price</th><td>$diposit->offer_price</td></tr>";
//  echo "<tr><th>Regular Price</th><td>$product->regular_price</td></tr>";
 echo "</table>";
 echo Html::link(["route"=>url("diposits"),"text"=>"Manage"]);
 echo Page::content_close();
 echo Page::body_close();

?>

@endsection