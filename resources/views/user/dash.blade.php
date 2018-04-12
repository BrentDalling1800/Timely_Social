@extends('layouts.app')


@section('content')
<div class="container">

<div class="row">
<div class="col-md-3"></div>

<div class="col-md-6">
@foreach($feed as $item)
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
    		<div class="row">

    			<div class="col-md-6">
    				<img src="{{$item->avatar}}" class="img-fluid" style="width: 50px; border-radius: 50%"> 
    				&nbsp;
    				<strong>{{$item->author}}</strong>
    			</div>

    		</div>
  		</div>
  		<div class="card-body"> 
			{!!($item->content)!!}
		</div>

		 <div class="card-footer text-muted">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link" href="#"><small><i class="material-icons">thumb_up</i></small> <strong>Like</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="material-icons">textsms</i><strong> Comment</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#"><i class="material-icons">people</i> <strong>Public</strong></a>
  </li>
</ul>
  </div>
	</div>
</div>

<br>
@endforeach
</div>

<div class="col-md-4">

</div>
</div>

</div>
@endsection