@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Member"]);
echo Page::body_open();
echo Page::content_open(["title"=>"Create Member","button"=>"Member","route"=>"members"]);

echo Table::get_array_table($members,["id","name","lastname","address","nid","photo","deposit","withdraw","total_amount","updated_at","created_at"],"members");

echo Page::content_close();
echo Page::body_close();
?>

@endsection