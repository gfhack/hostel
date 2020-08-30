<a class="btn btn-primary" href="{{ route("{$route}.show", $id) }}">
    {{ __('View') }}
</a>

<a type="button" class="btn btn-secondary">
    {{ __('Edit') }}
</a>

{!! Form::model($hotel, ['route' => ['admin.hotel.destroy', $hotel->id], 'method' => 'delete']) !!}
    {{ Form::submit(__('Delete'), ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
