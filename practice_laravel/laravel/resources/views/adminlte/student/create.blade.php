@extends('admin_layout.app')
@section('header')
@include('admin_layout.header')
@endsection
@section('leftbar')
@include('admin_layout.leftbar')
@endsection
@section('rightbar')
@include('admin_layout.rightbar')
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{$data['module']['name']}}
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    </section>
    <!-- /.content -->
</div>
@endsection