@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    #
                </th>
                <th scope="col">
                    {{ __('Name') }}
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
                    <a class="btn btn-success" href="{{ route('admin.hotel.create') }}">
                        {{ __('New') }}
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <th scope="row">
                        {{ $hotel->id }}
                    </th>
                    <td>
                        {{ $hotel->name }}
                    </td>
                    <td>
                        {{ $hotel->updated_at }}
                    </td>
                    <td>
                        {{ $hotel->created_at }}
                    </td>
                    <td colspan="2">
                        <a type="button" class="btn btn-dark" href="{{ route("admin.hotel.room", $hotel->id) }}">
                            {{ __('Rooms') }}
                        </a>

                        @include('layouts._actions', [
                            'id' => $hotel->id,
                            'route' => 'admin.hotel',
                        ])
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
