@extends('layouts.app')

@section('content')

<div class="container" style="padding-top: 15px; padding: .5vh;">

<div class=" d-flex flex-row flex-wrap justify-content-center" style="margin-top: 15px;">





<div class="col-md-3">
<div class="card">
  <img src="{{Auth::user()->avatar}}" class="card-img-top profile">
<div class="card-body">


<div class="" >
<div class="col-md-12 text-left">
<blockquote class="blockquote">
  <p class="mb-0">{{Auth::user()->name}}</p>
  <footer class="blockquote-footer"><cite title="Source Title">{{Auth::user()->company}}</cite></footer>
</blockquote>
<a class="btn btn-block btn-outline-secondary">Your Profile</a>
</div>

</div>


</div>
</div>
<br>
</div>




















<div class="col-md-6" style="overflow-y: scroll; height: 85vh;">

  <div class="col-md-12">
    <div class="card card-body" style="padding-bottom: 0px;">
      <form action="{{url('/')}}/user/post_submit" method="POST">
        <div class="form-group" style="">

          {{ csrf_field() }}
          <input name="author" value="{{Auth::user()->name}}" hidden>
          <input name="avatar" value="{{Auth::user()->avatar}}" hidden>
          <input name="author_id" value="{{Auth::user()->id}}" hidden>

            <textarea class="form-control" name="content" rows="3" placeholder="Make A Post..." autofocus></textarea>
            <button type="submit" class="btn btn-block btn-outline-secondary" style="margin-top: 1vh; margin-bottom: 1vh;">Submit</button>
        </div>
      </form>
    </div>
    <br>
  </div>

@foreach($feed as $item)
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
        <div class="row">

          <div class="col-md-6">
            
            <strong>{{$item->author}}</strong>
          </div>

          <div class="col-md-6 text-right">
          <strong>{{$item->created_at->diffForHumans()}}</strong>
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
    <a class="nav-link" href="#{{$item->id}}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="{{$item->id}}"><i class="material-icons">textsms</i><strong> Comment</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#"><i class="material-icons">people</i> <strong>Public</strong></a>
  </li>
</ul>



<div class="collapse" id="{{$item->id}}">
    <div class="form-group card-body" style="">
    <textarea class="form-control" id="" rows="3" placeholder="Leave Your Comment..." autofocus></textarea>
    <button class="btn btn-outline-secondary" style="float: right; margin-top: 1vh; margin-bottom: 1vh;">Submit</button>
  </div>
</div>


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