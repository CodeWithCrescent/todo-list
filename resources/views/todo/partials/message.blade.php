
    @if(session()->has('message'))
        <h4 class="alert alert-success">{{session()->get('message')}}</h4>
    @endif