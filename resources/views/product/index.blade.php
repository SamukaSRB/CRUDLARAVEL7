@extends('product.layout')
@section('content')
<br><br><br>
<div class = 'containner'>
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>All products</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{route('create.product')}}">Create new produto</a>
</div>
</div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif


<table class= "table table-bordered">
<tr>
<th width="280px">Name</th>
<th width="50px">Code</th>
<th width="200px">Details</th>
<th width="100px">Image</th>
<th width="100px">Action</th>
</tr>

@foreach($product as $pro)
<tr>

<td>{{$pro->product_name}}</td>
<td>{{$pro->product_code}}</td>
<td>{{$pro->details}}</td>
<td><img src="{{URL::to($pro->logo)}}" heidth="70px;" width="80px;"></td>

<td>
<!--<a class="btn btn-info" href="">Show</a>-->
<a class="btn btn-primary" href="{{URL::to('edit/product/'.$pro->id)}}">Edit</a>
<a class="btn btn-danger" href="{{URL::to('delete/product/'.$pro->id)}}" onclick="return confirm('Are you sure')">Delete</a>
</td>

</tr>
@endforeach



</tr>


</table>






@endsection