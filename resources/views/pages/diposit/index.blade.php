@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Diposit"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Diposit","button"=>"Diposit","route"=>"diposits"]);

echo Table::get_array_table($diposits,["id","name","mobile","address","principle","paid","due","loanactive_id","updated_at","created_at"],"diposits");

echo Page::content_close();
echo Page::body_close();
?>

@endsection