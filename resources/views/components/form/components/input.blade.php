<div class="mainInput">
    <label>{{ $label }}</label>
    <input type="{{$type}}" name="{{$name}}" @class(['errorsField' => $errors->has($name)])>

    <x-form.components.errors :field="$name"/>
</div>