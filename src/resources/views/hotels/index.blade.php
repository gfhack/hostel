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
                <td>
                    @include('layouts._actions')
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection
