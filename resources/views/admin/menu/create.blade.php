@extends('layouts.admin')
@section('content')

<form class="" action="{{route('menu.store')}}" method="post">
  {{csrf_field()}}
  <input type="text" name="" value="" placeholder="Menu">
  <input class="btn btn-success" type="submit"></input>

</form>
@endsection
