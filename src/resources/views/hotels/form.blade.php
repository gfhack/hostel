@extends('layouts.app')

@section('content')
{!! Form::model($hotel, $route) !!}
    @include('form.text-field', ['field' => 'Name'])

    {{ Form::submit(__('Save'), ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
