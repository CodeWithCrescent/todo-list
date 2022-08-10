@extends('layout.app')


@section('body')
    <br>

    @include('todo.partials.message')

            <center> <h1>Todo Lists</h1> </center>
    <div class="col-lg-3"></div>
    
    <div class="col-lg-4">
    
        <ul class="list-group">
            @foreach ($todos as $todo)
             <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="{{'/todo/' .$todo->id}}">{{$todo->title}}</a>
                 <span class="badge bg-primary rounded-pill pull-right">{{$todo->created_at->diffForHumans()}}</span>
             </li>
            @endforeach
        </ul>
    </div>
    <div class="col-lg-2">
        <ul class="list-group">

                @foreach ($todos as $todo)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    
                    <a href="{{'/todo/' .$todo->id.'/edit'}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    
                    <form action="{{'/todo/'.$todo->id}}" method="post" class="form-group pull-right">
                   
                    {{csrf_field()}}  
                    {{method_field('DELETE')}}

                        <button type="submit" style="border:none;" class="badge bg-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    
                    </form>
                </li>

                @endforeach
        </ul>
    </div>
    <div class="col-lg-3">
        <a href="create" class="btn btn-info">Add New</a>
    </div>
@endsection