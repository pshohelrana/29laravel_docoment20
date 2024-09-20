@extends('layouts.app')
@section('page')

{!! Page::header(["title"=>"Edit Member"]) !!}
{!! Page::body_open() !!}
{!! Page::content_open(["title"=>"Edit Member"]) !!}
{!! Form::open_laravel(["route"=>"members/$member->id","method"=>"PUT"]) !!}
{!! Form::text(["name"=>"name","label"=>"Name","value"=>"$member->name"]) !!}
{!! Form::text(["name"=>"lastname","label"=>"Lastname","value"=>"$member->lastname"]) !!}
{!! Form::text(["name"=>"address","label"=>"Address","value"=>"$member->address"]) !!}
{!! Form::text(["name"=>"nid","label"=>"NID","value"=>"$member->nid"]) !!}
{!! Form::text(["name"=>"photo","label"=>"photo","value"=>"$member->photo","type"=>"file"]) !!}
{!! Form::text(["name"=>"deposit","label"=>"Deposit","value"=>"$member->deposit"]) !!}
{!! Form::text(["name"=>"withdraw","label"=>"Withdraw","value"=>"$member->withdraw"]) !!}
{!! Form::text(["name"=>"total_amount","label"=>"Total amount","value"=>"$member->total_amount"]) !!}
{!! Form::text(["name"=>"updated_at","label"=>"Updated at","value"=>"$member->updated_at"]) !!}
{!! Form::text(["name"=>"created_at","label"=>"Created at","value"=>"$member->updated_at"]) !!}

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
 echo Html::link(["route"=>url("members"),"text"=>"Manage"]);
 echo "</div>";
 
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection