@extends('layouts.app')
@section('page')
<?php
    echo Page::header(["title"=>"Create Loanapplicant"]);
    echo Page::body_open();
    echo Page::content_open(["title"=>"Create Loanapplicant"]);

    echo Form::open_laravel(["route"=>"loanapplicants"]);
    echo Form::text(["name"=>"name","label"=>"Name"]);
    echo Form::text(["name"=>"mobile","label"=>"Mobile"]);
    echo Form::text(["name"=>"address","label"=>"Address"]);
    echo Form::text(["name"=>"nid","label"=>"NID"]);
    echo Form::text(["name"=>"occupation","label"=>"occupation"]);
    echo Form::text(["name"=>"nominee_name","label"=>"Nominee name"]);
    echo Form::text(["name"=>"nominee_account","label"=>"Nominee account"]);
    echo Form::text(["name"=>"loan_amount","label"=>"Loan amount"]);
    echo Form::text(["name"=>"interest_rate","label"=>"Interest Rate"]);
    echo Form::text(["name"=>"photo","label"=>"Photo","type"=>"file"]);
    echo Form::text(["name"=>"updated_at","label"=>"Updated_at"]);
    echo Form::text(["name"=>"created_at","label"=>"created_at"]);
    echo Form::button(["name"=>"btnSubmit","value"=>"Save","type"=>"submit"]);
    echo Form::close();
    
    echo Page::content_close();
    echo Page::body_close();
?>
@endsection