@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Show Role"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Show Role"]);
 echo "<table class='table'>";
 echo "<tr><th>ID</th><td>$role->id</td></tr>";
 echo "<tr><th>Name</th><td>$role->name</td></tr>";
 echo "</table>";
 echo Html::link(["route"=>url("roles"),"text"=>"Manage"]);
 echo Page::content_close();
 echo Page::body_close();

?>

@endsection