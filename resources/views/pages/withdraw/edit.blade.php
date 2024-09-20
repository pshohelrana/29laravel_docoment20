@extends('layouts.app')
@section('page')

{!! Page::header(["title"=>"Edit Withdraw"]) !!}
{!! Page::body_open() !!}
{!! Page::content_open(["title"=>"Edit Withdraw"]) !!}
{!! Form::open_laravel(["route"=>"withdraws/$withdraw->id","method"=>"PUT"]) !!}
{!! Form::text(["name"=>"name","label"=>"Name","value"=>"$withdraw->name"]) !!}
{!! Form::text(["name"=>"policy","label"=>"Policy","value"=>"$withdraw->policy"]) !!}
{!! Form::text(["name"=>"lastname","label"=>"Lastname","value"=>"$withdraw->lastname"]) !!}
{!! Form::text(["name"=>"loanamount","label"=>"loanamount","value"=>"$withdraw->loanamount"]) !!}
{!! Form::text(["name"=>"interest_rate","label"=>"interest_rate","value"=>"$withdraw->interest_rate"]) !!}
{!! Form::text(["name"=>"net_amount","label"=>"net_amount","value"=>"$withdraw->net_amount"]) !!}
<!-- {!! Form::text(["name"=>"updated_at","label"=>"updated_at","value"=>"$withdrow->updated_at"]) !!}
{!! Form::text(["name"=>"created_at","label"=>"created_at","value"=>"$withdrow->crated_at"]) !!} -->
{!! Form::text(["name"=>"member_id","label"=>"member_id","value"=>"$withdraw->member_id"]) !!}

<?php
//  echo Form::select(["name"=>"brand","label"=>"Brand","table"=>$brands]);
//  echo Form::select(["name"=>"category","label"=>"Category","value"=>"$product->product_category_id","table"=>$categories]);
 
//  echo Form::text(["name"=>"offer_price","label"=>"Offer Price","value"=>"$product->offer_price"]);
//  echo Form::text(["name"=>"regular_price","label"=>"Regular Price","value"=>"$product->regular_price"]);

 echo "<div class='btn-group'>";
 echo Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Update"]);
 echo Html::link(["route"=>url("withdraws"),"text"=>"Manage"]);
 echo "</div>";
 
 echo Form::close();

 echo Page::content_close();
 echo Page::body_close();

?>

@endsection