@extends('layouts.template')

@section('content')
<div class="d-flex flex-column align-items-center">
    <div class="mt-2 mb-2">
    <a href="#"><img src="{{asset('storage/cornion.jpg')}}"; alt="cornion" width="200" height="auto"></a>
    </div>
    <div class="mb-2">
    <a href="#"><img src="{{asset('storage/urrieles.jpg')}}"; alt="urrieles" width="200" height="auto"></a>
    </div>
    <div class="mb-2">
    <a href="#"><img src="{{asset('storage/andara.jpg')}}"; alt="andara" width="200" height="auto"></a>
    </div>
</div>
@endsection