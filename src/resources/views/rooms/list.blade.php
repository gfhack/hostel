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
                    {{ __('Available?') }}
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
                        @if ($room->users->isNotEmpty())
                            <span class="badge badge-danger">
                                {{ __('Occupied') }}
                            </span>
                        @else
                            <span class="badge badge-success">
                                {{ __('Vacant') }}
                            </span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row justify-content-center">
        {{ $rooms->onEachSide(5)->links() }}
    </div>
@endsection
