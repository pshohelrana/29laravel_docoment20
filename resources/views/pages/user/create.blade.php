@extends('layouts.app')
@section('page')
<h1>Create</h1>
<form action="{{route('users.store')}}" method="post">
  @csrf  
  Name:
  <?php        
        
    //echo input_field(["name"=>"name","type"=>"text","label"=>"Mobile"]);
         
           
   ?>
  <input type="text" name="name" />
  <input type="submit" value="Save" />
</form>

@endsection