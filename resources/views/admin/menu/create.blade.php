@extends('layouts.admin')
@section('content')
<form class="" action="{{route('menu.store')}}" method="post">
  {{csrf_field()}}
  <input type="text" name="" value="" placeholder="Menu">
  <input type="submit">Add</input>

</form>
@endsection
