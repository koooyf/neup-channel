@extend('app')
@section('content')
 <h1>hello world </h1>
 <ur>
@foreach{$people as $person}
  <li>{{$person}}</li>
  @endforeach
</ur>
@stop
