@extends('layouts.app')
@section('page')
<?php
    echo Page::header(["title"=>"Create Member"]);
    echo Page::body_open();
    echo Page::content_open(["title"=>"Create Member"]);

    echo Form::open_laravel(["route"=>"members"]);
    echo Form::text(["name"=>"name","label"=>"Name"]);
    echo Form::text(["name"=>"lastname","label"=>"Lastname"]);
    echo Form::text(["name"=>"address","label"=>"Address"]);
    echo Form::text(["name"=>"nid","label"=>"Nid"]);
    echo Form::text(["name"=>"photo","label"=>"Photo","type"=>"file"]);
    echo Form::text(["name"=>"deposit","label"=>"Deposit"]);
    echo Form::text(["name"=>"withdraw","label"=>"Withdraw"]);
    echo Form::text(["name"=>"total_amount","label"=>"Total_amount"]);
    echo Form::text(["name"=>"updated_at","label"=>"Updated_at"]);
    echo Form::text(["name"=>"created_at","label"=>"Created_at"]);
    echo Form::button(["name"=>"btnSubmit","value"=>"Save","type"=>"submit"]);
    echo Form::close();
    
    echo Page::content_close();
    echo Page::body_close();
?>
@endsection