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
                @forelse ($hotel->rooms as $room)
                <li class="list-group-item">
                    <strong>{{ __('Room') }} #{{ $room->id }}:</strong> {{ $room->description }}
                </li>
                @empty
                <li class="list-group-item">
                    <a
                        class="btn btn-success"
                        href="{{ route('admin.hotel.room.create', $hotel->id) }}"
                    >
                        {{ __('Create new room') }}
                    </a>
                </li>
                @endforelse
            </ul>
        </div>
    </div>

    <div class="row mt-1">
        <div class="col">
            @include('layouts._go-back', ['route' => route('admin.hotel')])
        </div>
    </div>
@endsection
