@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Show Member"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Show Member"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$member->id</td></tr>";
 echo "<tr><th>Name</th><td>$member->name</td></tr>";
 echo "<tr><th>LastName</th><td>$member->lastname</td></tr>";
 echo "<tr><th>Address</th><td>$member->address</td></tr>";
 echo "<tr><th>NID</th><td>$member->nid</td></tr>";
 echo "<tr><th>Photo</th><td>$member->photo</td></tr>";
 echo "<tr><th>Deposit</th><td>$member->deposit</td></tr>";
 echo "<tr><th>Withdraw</th><td>$member->withdraw</td></tr>";
 echo "<tr><th>Total Amount</th><td>$member->total_amount</td></tr>";
 echo "<tr><th>Updated_at</th><td>$member->updated_at</td></tr>";
 echo "<tr><th>Created_at</th><td>$member->created_at</td></tr>";
//  echo "<tr><th>Offer Price</th><td>$member->offer_price</td></tr>";
//  echo "<tr><th>Regular Price</th><td>$member->regular_price</td></tr>";
 echo "</table>";
 echo Html::link(["route"=>url("members"),"text"=>"Manage"]);
 echo Page::content_close();
 echo Page::body_close();

?>

@endsection