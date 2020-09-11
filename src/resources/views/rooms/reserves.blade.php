@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    {{ __('Description') }}
                </th>
                <th scope="col">
                    {{ __('Hotel') }}
                </th>
                <th scope="col">
                    {{ __('Dates') }}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
                <tr>
                    <td>
                        {{ $room->description }}
                    </td>
                    <td>
                        {{ $room->hotel->name }}
                    </td>
                    <td>
                        <span class="d-block">
                            <strong>{{ __('Begin_at') }}:</strong>
                            {{ $room->pivot->begin_at }}
                        </span>
                        <span class="d-block">
                            <strong>{{ __('End_at') }}:</strong>
                            {{ $room->pivot->end_at }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row justify-content-center">
        {{ $rooms->onEachSide(5)->links() }}
    </div>
@endsection
