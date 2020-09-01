<a class="btn btn-primary" href="{{ route("{$route}.show", $id) }}">
    {{ __('View') }}
</a>

<a type="button" class="btn btn-secondary" href="{{ route("{$route}.edit", $id) }}">
    {{ __('Edit') }}
</a>

{!! Form::model($hotel, ['route' => ["{$route}.destroy", $id], 'method' => 'delete']) !!}
    {{ Form::submit(__('Delete'), ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
