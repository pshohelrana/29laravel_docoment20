@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Show Income"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Show Income"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$income->id</td></tr>";
 echo "<tr><th>Name</th><td>$income->name</td></tr>";
 echo "<tr><th>Taka</th><td>$income->taka</td></tr>";
 
 echo "<tr><th>Updated_at</th><td>$income->updated_at</td></tr>";
 echo "<tr><th>Created_at</th><td>$income->created_at</td></tr>";
//  echo "<tr><th>Offer Price</th><td>$member->offer_price</td></tr>";
//  echo "<tr><th>Regular Price</th><td>$member->regular_price</td></tr>";
 echo "</table>";
 echo Html::link(["route"=>url("incomes"),"text"=>"Manage"]);
 echo Page::content_close();
 echo Page::body_close();

?>

@endsection