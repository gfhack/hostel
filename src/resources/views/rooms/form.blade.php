@extends('layouts.app')

@section('content')
{!! Form::model($room, $route) !!}
    @include('form.text-field', ['field' => 'Description'])

    {{ Form::submit(__('Save'), ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
