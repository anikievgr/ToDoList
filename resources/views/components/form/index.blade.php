@section('link')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection
<div class="formContainer">
    <form action="{{ route($action) }}" class="mainFrom" method="POST">
        @csrf
        {{ $slot }}
        <x-form.components.submit/>    
    </form>
</div>
