@extends('layouts.app')
@section('page')
<?php
    echo Page::header(["title"=>"Create Income"]);
    echo Page::body_open();
    echo Page::content_open(["title"=>"Create Income"]);

    echo Form::open_laravel(["route"=>"incomes"]);
    echo Form::text(["name"=>"name","label"=>"Account Name"]);
    echo Form::text(["name"=>"taka","label"=>"Taka"]);
    
    echo Form::text(["name"=>"updated_at","label"=>"Updated_at"]);
    echo Form::text(["name"=>"created_at","label"=>"Created_at"]);
    echo Form::button(["name"=>"btnSubmit","value"=>"Save","type"=>"submit"]);
    echo Form::close();
    
    echo Page::content_close();
    echo Page::body_close();
?>
@endsection