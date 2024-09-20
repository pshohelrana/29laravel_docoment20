@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Expense"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Expense","button"=>"Expense","route"=>"expenses"]);

echo Table::get_array_table($expenses,["id","name","paid_taka","unpaid_taka","remark","updated_at","created_at"],"expenses");

echo Page::content_close();
echo Page::body_close();
?>

@endsection