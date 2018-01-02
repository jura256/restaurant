@extends('layouts.admin')
@section('content')
  <div class="col-md-4">
    <ul class="list-group">
    @foreach($menus as $menu)
      <li class="list-group-item clearfix">{{$menu->title}} <a class="btn btn-danger pull-right" href="#">Delete</a><a class="btn btn-primary pull-right" href="#">Edit</a></li>
    @endforeach
  </ul>
  <ul class="">
    <li class=""><a class="btn btn-default pull-left" href="{{route('admin')}}">Atgal</a><a class="btn btn-success pull-right" href="{{route('menu.create')}}">Sukurti</a></li>

  </ul>
  </div>

@endsection
