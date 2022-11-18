@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>კერძის დასახელება</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>წონა</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>ფასი</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="დამატება" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop