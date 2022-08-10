@extends('layout.app')

@section('title','Todo Create List')

@section('body')
        <br>
    <div class="col-lg-4"></div>
    <div class="col-lg-4">

                <h1>{{substr(Route::currentRouteName(),5)}} Item</h1>

        <form class="form-horizontal" action="/todo/@yield('editId')" method="POST">
            {{csrf_field()}} <!-- For Security Token -->
            @section('editMethod')
                @show
            <fieldset>
                <div class="form-group">
                    <div class="col-lg-10">
                        <input type="text" placeholder="Title" value="@yield('editTitle')" name="title" class="form-control">
                    </div>  <br>

                    <div class="col-lg-10">
                        <textarea class="form-control" placeholder="Body" name="body" id="Textarea" rows="5">@yield('editBody')</textarea>
                    </div>  <br>  
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </fieldset>

        </form><br>
        @include('todo.partials.errors')
    </div>

    <div class="col-lg-4">
        <a href="/todo" class="btn btn-info">Back</a>
    </div>
@endsection