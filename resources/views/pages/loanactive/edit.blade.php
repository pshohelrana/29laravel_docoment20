@extends('layouts.app')
@section('page')

{!! Page::header(["title"=>"Edit loanactive"]) !!}
{!! Page::body_open() !!}
{!! Page::content_open(["title"=>"Edit Loanactive"]) !!}
{!! Form::open_laravel(["route"=>"loanactives/$loanactive->id","method"=>"PUT"]) !!}
{!! Form::text(["name"=>"name","label"=>"Name","value"=>"$loanactive->name"]) !!}
{!! Form::text(["name"=>"mobile","label"=>"Mobile","value"=>"$loanactive->mobile"]) !!}
{!! Form::text(["name"=>"address","label"=>"Address","value"=>"$loanactive->address"]) !!}
{!! Form::text(["name"=>"loan_system","label"=>"Loan system","value"=>"$loanactive->loan_system"]) !!}
{!! Form::text(["name"=>"principle","label"=>"Principle","value"=>"$loanactive->principle"]) !!}
{!! Form::text(["name"=>"interest_rate","label"=>"Interest Rrate","value"=>"$loanactive->interest_rate"]) !!}
{!! Form::text(["name"=>"emi","label"=>"EMI","value"=>"$loanactive->emi"]) !!}
{!! Form::text(["name"=>"total_tk","label"=>"Total tk","value"=>"$loanactive->total_tk"]) !!}
{!! Form::text(["name"=>"updated_at","label"=>"Updated at","value"=>"$loanactive->updated_at"]) !!}
{!! Form::text(["name"=>"created_at","label"=>"Created at","value"=>"$loanactive->created_at"]) !!}
{!! Form::text(["name"=>"remark","label"=>"Remark","value"=>"$loanactive->remark"]) !!}
{!! Form::text(["name"=>"photo","label"=>"Photo","value"=>"$loanactive->Photo","type"=>"file"]) !!}


<?php
//  echo Form::select(["name"=>"brand","label"=>"Brand","table"=>$brands]);
//  echo Form::select(["name"=>"category","label"=>"Category","value"=>"$product->product_category_id","table"=>$categories]);
 
//  echo Form::text(["name"=>"offer_price","label"=>"Offer Price","value"=>"$product->offer_price"]);
//  echo Form::text(["name"=>"regular_price","label"=>"Regular Price","value"=>"$product->regular_price"]);

 echo "<div class='btn-group'>";
 echo Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Update"]);
 echo Html::link(["route"=>url("loanactives"),"text"=>"Manage"]);
 echo "</div>";
 
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection