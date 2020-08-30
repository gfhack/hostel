@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>{{ __('Name') }}:</strong> {{ $hotel->name }}
                </li>
                <li class="list-group-item">
                    <strong>{{ __('Updated at') }}:</strong> {{ $hotel->updated_at }}
                </li>
                <li class="list-group-item">
                    <strong>{{ __('Created at') }}:</strong> {{ $hotel->created_at }}
                </li>
            </ul>
        </div>

        <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>{{ __('Room') }}:</strong> Quarto 1
                </li>
            </ul>
        </div>
    </div>
@endsection
