 <!-- Displaying Errors -->
    @if (count($errors)>0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
        @endif