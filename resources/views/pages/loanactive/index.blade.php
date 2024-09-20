
@extends('layouts.app')
@section('page')

<?php
echo Page::header(["title"=>"Manage Loanactive"]);
echo Page::body_open();
echo Page::content_open(["button"=>"Loanactive","route"=>"loanactives"]);
?>

<?php

echo Table::get_array_table($loanactives,["id","name","mobile","address","total_tk"],"loanactives");

?>

{{$loanactives->links("pagination::bootstrap-4")}}

<?php
echo Page::content_close();
echo Page::body_close();
?>

@endsection