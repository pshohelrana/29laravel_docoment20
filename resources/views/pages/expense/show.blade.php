@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Show Expense"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Show Expense"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$expense->id</td></tr>";
 echo "<tr><th>Name</th><td>$expense->name</td></tr>";
 echo "<tr><th>paid Taka</th><td>$expense->paid_taka</td></tr>";
 echo "<tr><th>Unpaid Taka</th><td>$expense->unpaid_taka</td></tr>";
 echo "<tr><th>Remark</th><td>$expense->remark</td></tr>";
 
 echo "<tr><th>Updated_at</th><td>$expense->updated_at</td></tr>";
 echo "<tr><th>Created_at</th><td>$expense->created_at</td></tr>";
//  echo "<tr><th>Offer Price</th><td>$member->offer_price</td></tr>";
//  echo "<tr><th>Regular Price</th><td>$member->regular_price</td></tr>";
 echo "</table>";
 echo Html::link(["route"=>url("expenses"),"text"=>"Manage"]);
 echo Page::content_close();
 echo Page::body_close();

?>

@endsection