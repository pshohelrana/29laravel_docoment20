@extends('layouts.app')
@section('page')

{!! Page::header(["title"=>"Edit Diposit"]) !!}
{!! Page::body_open() !!}
{!! Page::content_open(["title"=>"Edit Diposit"]) !!}
{!! Form::open_laravel(["route"=>"diposits/$diposit->id","method"=>"PUT"]) !!}
{!! Form::text(["name"=>"name","label"=>"Name","value"=>"$diposit->name"]) !!}
{!! Form::text(["name"=>"mobile","label"=>"Mobile","value"=>"$diposit->mobile"]) !!}
{!! Form::text(["name"=>"address","label"=>"Addreess","value"=>"$diposit->address"]) !!}
{!! Form::text(["name"=>"principle","label"=>"Principle","value"=>"$diposit->principle"]) !!}
{!! Form::text(["name"=>"paid","label"=>"Paid","value"=>"$diposit->paid"]) !!}

{!! Form::text(["name"=>"due","label"=>"Due","value"=>"$diposit->due"]) !!}
{!! Form::text(["name"=>"loanactive_id","label"=>"Loanactive Id","value"=>"$diposit->loanactive_id"]) !!}
{!! Form::text(["name"=>"updated_at","label"=>"Updated_at","value"=>"$diposit->updated_at"]) !!}
{!! Form::text(["name"=>"created_at","label"=>"created_at","value"=>"$diposit->creted_at"]) !!}

<?php
//  echo Form::select(["name"=>"brand","label"=>"Brand","table"=>$brands]);
//  echo Form::select(["name"=>"category","label"=>"Category","value"=>"$product->product_category_id","table"=>$categories]);
 
//  echo Form::text(["name"=>"offer_price","label"=>"Offer Price","value"=>"$product->offer_price"]);
//  echo Form::text(["name"=>"regular_price","label"=>"Regular Price","value"=>"$product->regular_price"]);

 echo "<div class='btn-group'>";
 echo Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Update"]);
 echo Html::link(["route"=>url("diposits"),"text"=>"Manage"]);
 echo "</div>";
 
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection