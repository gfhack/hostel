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
                    {{ __('Updated at') }}
                </th>
                <th scope="col">
                    {{ __('Created at') }}
                </th>
                <th scope="col">
                    {{ __('Actions') }}
                </th>
                <th scope="col">
                    <a class="btn btn-success" href="{{ route('admin.hotel.room.create', $hotel->id) }}">
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
                        {{ $room->updated_at }}
                    </td>
                    <td>
                        {{ $room->created_at }}
                    </td>
                    {{-- <td colspan="2">
                        @include('layouts._actions', [
                            'id' => $hotel->id,
                            'route' => 'admin.hotel',
                        ])
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
