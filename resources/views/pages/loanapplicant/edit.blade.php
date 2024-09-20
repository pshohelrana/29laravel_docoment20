@extends('layouts.app')
@section('page')

{!! Page::header(["title"=>"Edit Loanapplicant"]) !!}
{!! Page::body_open() !!}
{!! Page::content_open(["title"=>"Edit Loanapplicant"]) !!}
{!! Form::open_laravel(["route"=>"loanapplicants/$loanapplicant->id","method"=>"PUT"]) !!}
{!! Form::text(["name"=>"name","label"=>"Name","value"=>"$loanapplicant->name"]) !!}
{!! Form::text(["name"=>"mobile","label"=>"Mobile","value"=>"$loanapplicant->mobile"]) !!}
{!! Form::text(["name"=>"address","label"=>"Address","value"=>"$loanapplicant->address"]) !!}
{!! Form::text(["name"=>"nid","label"=>"NID","value"=>"$loanapplicant->nid"]) !!}
{!! Form::text(["name"=>"occupation","label"=>"Occupation","value"=>"$loanapplicant->occupation"]) !!}
{!! Form::text(["name"=>"nominee_name","label"=>"Nominee name","value"=>"$loanapplicant->nominee_name"]) !!}
{!! Form::text(["name"=>"nominee_account","label"=>"Nominee Account","value"=>"$loanapplicant->nominee_account"]) !!}
{!! Form::text(["name"=>"loan_amount","label"=>"Loan_amount","value"=>"$loanapplicant->loan_amount"]) !!}
{!! Form::text(["name"=>"interest_rate","label"=>"Interest_rate","value"=>"$loanapplicant->interest_rate"]) !!}
{!! Form::text(["name"=>"photo","label"=>"Photo","value"=>"$loanapplicant->photo","type"=>"file"]) !!}
{!! Form::text(["name"=>"updated_at","label"=>"Updated At","value"=>"$loanapplicant->updated_at"]) !!}
{!! Form::text(["name"=>"created_at","label"=>"Created at","value"=>"$loanapplicant->updated_at"]) !!}

<?php
//  echo Form::select(["name"=>"brand","label"=>"Brand","table"=>$brands]);
//  echo Form::select(["name"=>"category","label"=>"Category","value"=>"$product->product_category_id","table"=>$categories]);
 
//  echo Form::text(["name"=>"offer_price","label"=>"Offer Price","value"=>"$product->offer_price"]);
//  echo Form::text(["name"=>"regular_price","label"=>"Regular Price","value"=>"$product->regular_price"]);

 echo "<div class='btn-group'>";
 echo Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Update"]);
 echo Html::link(["route"=>url("loanapplicants"),"text"=>"Manage"]);
 echo "</div>";
 
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection