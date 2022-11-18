@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">მენიუ</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">კერძის დასახელება : {{ $contacts->name }}</h5>
        <p class="card-text">წონა : {{ $contacts->weight }}</p>
        <p class="card-text">ფასი : {{ $contacts->price }}</p>
  </div>
       
    </hr>
  
  </div>
</div>