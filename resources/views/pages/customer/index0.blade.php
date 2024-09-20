@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Customer"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Customer","button"=>"Customer","route"=>"customers"]);

echo get_array_table($customers,["id","name"],"customers");

echo Page::content_close();
echo Page::body_close();
?>

@endsection