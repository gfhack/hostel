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
                </th>
                <th scope="col">
                </th>
                <th scope="col">
                    <a
                        class="btn btn-success btn-block"
                        href="{{ route('admin.hotel.create') }}"
                    >
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
                        <span class="d-block">
                            <strong>{{ __('Created at') }}:</strong>
                            {{ $hotel->created_at }}
                        </span>
                        <span class="d-block">
                            <strong>{{ __('Updated at') }}:</strong>
                            {{ $hotel->updated_at }}
                        </span>
                    </td>
                    <td>
                        <a
                            type="button"
                            class="btn btn-dark btn-block"
                            href="{{ route("admin.hotel.room", $hotel->id) }}"
                        >
                            <span class="badge badge-light">
                                {{ $hotel->rooms->count() }}
                            </span>
                            {{ __('Rooms') }}
                        </a>
                    </td>
                    <td>
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
