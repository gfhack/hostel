{!!
    Form::model(
        $hotel,
        ['route' => ["{$route}.destroy", $id], 'method' => 'delete']
    )
!!}
    <div class="btn-group btn-block" role="group">
        <a class="btn btn-primary" href="{{ route("{$route}.show", $id) }}">
            {{ __('View') }}
        </a>

        <a
            type="button"
            class="btn btn-secondary"
            href="{{ route("{$route}.edit", $id) }}"
        >
            {{ __('Edit') }}
        </a>

        {{ Form::submit(__('Delete'), ['class' => 'btn btn-danger']) }}
    </div>
{!! Form::close() !!}
