<div class="form-group">
    {{ Form::label(Str::lower($field), __($field), ['for' => Str::lower($field)]) }}
    {{ Form::date(Str::lower($field), \Carbon\Carbon::now(), ['class' => $errors->has(Str::lower($field)) ? 'form-control is-invalid' : 'form-control' ]) }}

    @error(Str::lower($field))
        <small class="form-text text-muted">
            {{ $message }}
        </small>
    @enderror
</div>
