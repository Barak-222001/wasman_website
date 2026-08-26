<!-- @extends('layouts.app') -->

<!-- @section('content') -->
<h1>Our Services</h1>

<ul>
    @foreach($mytest as $mytest)
        <li>{{ $mytest }}</li>
    @endforeach
</ul>
<!-- @endsection -->