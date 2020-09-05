@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    #
                </th>
                <th scope="col">
                    {{ __('Description') }}
                </th>
                <th scope="col">
                </th>
                <th scope="col">
                </th>
                <th scope="col">
                    <a
                        class="btn btn-success btn-block"
                        href="{{ route('admin.hotel.room.create', $hotel->id) }}"
                    >
                        {{ __('New') }}
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
                <tr>
                    <th scope="row">
                        {{ $room->id }}
                    </th>
                    <td>
                        {{ $room->description }}
                    </td>
                    <td>
                        <span class="d-block">
                            <strong>{{ __('Created at') }}:</strong>
                            {{ $room->created_at }}
                        </span>
                        <span class="d-block">
                            <strong>{{ __('Updated at') }}:</strong>
                            {{ $room->updated_at }}
                        </span>
                    </td>
                    <td>
                        <a
                            type="button"
                            class="btn btn-dark btn-block"
                            href="{{ route("admin.hotel.show", $hotel->id) }}"
                        >
                            {{ __('Hotel') }}
                        </a>
                    </td>
                    <td>
                        @include('layouts._actions', [
                            'id' => [$hotel->id, $room->id],
                            'route' => 'admin.hotel.room',
                        ])
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
