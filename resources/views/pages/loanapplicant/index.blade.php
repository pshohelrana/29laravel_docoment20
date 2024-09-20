@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Loanapplicant"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Loanapplicant","button"=>"Loanapplicant","route"=>"loanapplicants"]);

echo Table::get_array_table($loanapplicants,["id","name","mobile","address","photo","nid","occupation","nominee_name","nominee_account","loan_amount","interest_rate","updated_at","created_at"],"loanapplicants");

echo Page::content_close();
echo Page::body_close();
?>

@endsection