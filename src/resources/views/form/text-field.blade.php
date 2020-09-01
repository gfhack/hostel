<div class="form-group">
    {{ Form::label('name', __($field), ['for' => Str::lower($field)]) }}
    {{ Form::text(Str::lower($field), null, ['class' => $errors->has(Str::lower($field)) ? 'form-control is-invalid' : 'form-control' ]) }}

    @error(Str::lower($field))
        <small class="form-text text-muted">
            {{ $message }}
        </small>
    @enderror
</div>
