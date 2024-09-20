@extends('layouts.app')
@section('page')
<?php
    echo Page::header(["title"=>"Create Diposit"]);
    echo Page::body_open();
    echo Page::content_open(["title"=>"Create Diposit"]);

    echo Form::open_laravel(["route"=>"diposits"]);
    echo Form::text(["name"=>"name","label"=>"Name"]);
    echo Form::text(["name"=>"mobile","label"=>"Mobile"]);
    echo Form::text(["name"=>"address","label"=>"Address"]);
    echo Form::text(["name"=>"principle","label"=>"Principle"]);
    echo Form::text(["name"=>"paid","label"=>"Paid"]);
    echo Form::text(["name"=>"due","label"=>"Due"]);
    echo Form::text(["name"=>"loanactive_id","label"=>"Loanactive Id"]);
    echo Form::text(["name"=>"created_at","label"=>"Created at"]);
    echo Form::text(["name"=>"updated_at","label"=>"Updated at"]);
    
    echo Form::button(["name"=>"btnSubmit","value"=>"Save","type"=>"submit"]);
    echo Form::close();
    
    echo Page::content_close();
    echo Page::body_close();
?>
@endsection