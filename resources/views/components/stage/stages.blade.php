@section('link')
    <link rel="stylesheet" href="{{ asset('css/stages/stages.css') }}">
@show
<!--Стадии тасков + таски-->
<div class="stages">
    <x-add :message="'Создать стадию'" :action="'stage.create'"/>
</div>