@extends('layout.app')

@section('body')
        <br>
    <div class="col-lg-4"></div>
    <div class="list-group col-lg-4">
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$item->title}}</h5>
                 <small>{{$item->created_at->diffForHumans()}}</small>
            </div>
            <p class="mb-1">{{$item->body}}</p>
                <!-- <small>Donec id elit non mi porta.</small> -->
        </div>
        <a href="/todo" class="btn btn-sm btn-dark">Back</a>
    </div>
    <div class="col-lg-4"></dib>
@endsection