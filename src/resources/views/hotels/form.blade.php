@extends('layouts.app')

@section('content')
{!! Form::model($hotel, ['route' => 'admin.hotel.store']) !!}
    @include('form.text-field', ['field' => 'Name'])

    {{ Form::submit(__('Create'), ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
