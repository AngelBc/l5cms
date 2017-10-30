@extends('admin::layouts.master')

@section('content')

@section('title')
    Main Title
@endsection

@section('page-title')
    Dashboard
@endsection

@section('breadcrumbs')
    Dashboard
@endsection

    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@stop
