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
                        <a class="btn btn-success" href="{{ route('rooms.reservation', [$room->hotel_id, $room->id]) }}">
                            {{ __('Reserve') }}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row justify-content-center">
        {{ $rooms->onEachSide(5)->links() }}
    </div>
@endsection
