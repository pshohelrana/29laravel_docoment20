@extends('layouts.app')
@section('page')

<?php
 echo Page::header(["title"=>"Edit Customer"]); 
 echo Page::body_open();
 echo Page::content_open(["title"=>"Edit Customer"]);
  
 echo Form::open_laravel(["route"=>"customers/$customer->id","method"=>"PUT"]); 
 echo Form::text(["name"=>"name","label"=>"Name","value"=>"$customer->name"]);
 echo Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Update"]);
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection