@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Role"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Role","button"=>"Role","route"=>"roles"]);

echo Table::get_array_table($roles,["id","name"],"roles");

echo Page::content_close();
echo Page::body_close();
?>

@endsection