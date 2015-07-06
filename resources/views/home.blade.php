@extends('templates.template')

@include('templates.header')
@include('templates.sidebar')

@section('content')
<div class="box box-solid box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Default Box Example</h3>
        <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">Label</span>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        The body of the box
    </div><!-- /.box-body -->
</div><!-- /.box -->
@endsection
