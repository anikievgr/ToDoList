@if($errors->has($field))
    <div class="errors">
        @foreach ($errors->get($field) as $massage)
            <p>{{$massage}}</p>
        @endforeach
    </div>
@endif