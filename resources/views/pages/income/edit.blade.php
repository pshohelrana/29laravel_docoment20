@extends('layouts.app')
@section('page')

{!! Page::header(["title"=>"Edit Income"]) !!}
{!! Page::body_open() !!}
{!! Page::content_open(["title"=>"Edit Income"]) !!}
{!! Form::open_laravel(["route"=>"incomes/$income->id","method"=>"PUT"]) !!}
{!! Form::text(["name"=>"name","label"=>"Account_Name","value"=>"$income->name"]) !!}
{!! Form::text(["name"=>"taka","label"=>"Taka","value"=>"$income->taka"]) !!}

{!! Form::text(["name"=>"updated_at","label"=>"Updated at","value"=>"$income->updated_at"]) !!}
{!! Form::text(["name"=>"created_at","label"=>"Created at","value"=>"$income->updated_at"]) !!}

<?php
//  echo Form::select(["name"=>"brand","label"=>"Brand","table"=>$brands]);
//  echo Form::select(["name"=>"category","label"=>"Category","value"=>"$product->product_category_id","table"=>$categories]);
 
//  echo Form::text(["name"=>"lastname","label"=>"Lastname"]);
//  echo Form::text(["name"=>"address","label"=>"Address"]);
//  echo Form::text(["name"=>"nid","label"=>"Nid"]);
//  echo Form::text(["name"=>"photo","label"=>"Photo","type"=>"file"]);
//  echo Form::text(["name"=>"deposit","label"=>"Deposit"]);
//  echo Form::text(["name"=>"withdraw","label"=>"Withdraw"]);
//  echo Form::text(["name"=>"total_amount","label"=>"Total_amount"]);
//  echo Form::text(["name"=>"updated_at","label"=>"updated_at"]);
//  echo Form::text(["name"=>"created_at","label"=>"Created_at"]);
//  echo Form::text(["name"=>"regular_price","label"=>"Regular Price","value"=>"$product->regular_price"]);

 echo "<div class='btn-group'>";
 echo Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Update"]);
 echo Html::link(["route"=>url("incomes"),"text"=>"Manage"]);
 echo "</div>";
 
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection