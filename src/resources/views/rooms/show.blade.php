@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>{{ __('Description') }}:</strong> {{ $room->description }}
                </li>
                <li class="list-group-item">
                    <strong>{{ __('Hotel') }}:</strong> {{ $hotel->name }}
                </li>
                <li class="list-group-item">
                    <strong>{{ __('Updated at') }}:</strong> {{ $room->updated_at }}
                </li>
                <li class="list-group-item">
                    <strong>{{ __('Created at') }}:</strong> {{ $room->created_at }}
                </li>
            </ul>
        </div>
    </div>
@endsection
