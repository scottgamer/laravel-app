@extends('layouts.app')

@section('content')

<h1>Contact Page</h1>

@if($people && count($people))
<ul>
  @foreach($people as $person)
  <li>{{$person}}</li>


  @endforeach
</ul>
@else
<h3>No people registered!</h3>
@endif

@endsection

@section('footer')
<script>
  alert('Hello visitor!')
</script>

@endsection