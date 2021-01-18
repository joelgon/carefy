<label class="{{$class ?? null}} submit">
    <span>{{$label ?? $input ?? "Error"}}</span>
    {!! Form::text($input, $value ?? null, $attributes) !!}
</label>
