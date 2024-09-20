@extends('layouts.app')
@section('page')
<?php
    echo Page::header(["title"=>"Create Withdraw"]);
    echo Page::body_open();
    echo Page::content_open(["title"=>"Create Withdraw"]);

    echo Form::open_laravel(["route"=>"withdraws"]);
    echo Form::text(["name"=>"name","label"=>"Name"]);
    echo Form::text(["name"=>"policy","label"=>"Policy"]);
    echo Form::text(["name"=>"lastname","label"=>"Lastname"]);
    echo Form::text(["name"=>"loanamount","label"=>"Loanamount"]);
    echo Form::text(["name"=>"interest_rate","label"=>"Interest_rate"]);
    echo Form::text(["name"=>"net_amount","label"=>"Net Amount"]);
    echo Form::text(["name"=>"updated_at","label"=>"Updated at"]);
    echo Form::text(["name"=>"created_at","label"=>"Created_at"]);
    echo Form::text(["name"=>"member_id","label"=>"Member Id"]);
    
    echo Form::button(["name"=>"btnSubmit","value"=>"Save","type"=>"submit"]);
    echo Form::close();
    
    echo Page::content_close();
    echo Page::body_close();
?>
@endsection