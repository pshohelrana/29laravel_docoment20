@extends('layouts.app')
@section('page')
<?php
    echo Page::header(["title"=>"Create Expense"]);
    echo Page::body_open();
    echo Page::content_open(["title"=>"Create Expense"]);

    echo Form::open_laravel(["route"=>"expenses"]);
    echo Form::text(["name"=>"name","label"=>"Name"]);
    echo Form::text(["name"=>"paid_taka","label"=>"Paid Taka"]);
    echo Form::text(["name"=>"unpaid_taka","label"=>"Unpaid_Taka"]);
    echo Form::text(["name"=>"remark","label"=>"Remark"]);
   
    echo Form::text(["name"=>"updated_at","label"=>"Updated_at"]);
    echo Form::text(["name"=>"created_at","label"=>"Created_at"]);
    echo Form::button(["name"=>"btnSubmit","value"=>"Save","type"=>"submit"]);
    echo Form::close();
    
    echo Page::content_close();
    echo Page::body_close();
?>
@endsection