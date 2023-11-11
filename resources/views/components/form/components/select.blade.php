<div class="mainSelect">
    <label>{{ $label }}</label>
    <select name="{{$name}}">
        @foreach ($data as $data)
            <option>$data->$name</option>
        @endforeach
    </select>
</div>