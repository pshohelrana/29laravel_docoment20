@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Delete Income"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Are you sure to delete?"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$income->id</td></tr>";
 echo "<tr><th>Income</th><td>$income->name</td></tr>";
 echo "</table>";
 echo Form::open_laravel(["route"=>"incomes/$income->id","method"=>"DELETE"]); 
 echo "<div class='btn-group'>";
 echo Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Delete","class"=>"btn btn-danger"]);
 echo Html::link(["route"=>url("incomes"),"text"=>"Manage"]);
 echo "</div>";
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection