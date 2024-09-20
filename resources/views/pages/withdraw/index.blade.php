@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Withdraw"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Withdraw","button"=>"withdraw","route"=>"withdraws"]);

echo Table::get_array_table($withdraws,["id","name","policy","lastname","loanamount","interest_rate","net_amount","updated_at","created_at","member_id"],"withdraws");

echo Page::content_close();
echo Page::body_close();
?>

@endsection