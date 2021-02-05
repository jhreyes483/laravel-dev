@if(session('message'))
    <div class="alert alert-{{session('type')}}" role="alert">
        {{session('message')}}
    </div>
@endif
