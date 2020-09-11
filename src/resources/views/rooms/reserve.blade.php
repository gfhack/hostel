@extends('layouts.app')

@section('content')
{!! Form::model($room, $route) !!}
    @include('form.date', ['field' => 'Begin_at'])

    @include('form.date', ['field' => 'End_at'])

    {{ Form::submit(__('Reserve'), ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
