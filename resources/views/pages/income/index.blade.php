@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Income"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Income","button"=>"Income","route"=>"incomes"]);

echo Table::get_array_table($incomes,["id","name","taka","updated_at","created_at"],"incomes");

echo Page::content_close();
echo Page::body_close();
?>

@endsection