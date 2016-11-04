@extends('admin.shared._layout')

@section('content')

{{ Form::open(array('method' => 'post', 'route' => 'adminuseradd')) }}

	echo 'lam dang dddddddddddddddd';

{{ Form::close() }}

@endsection