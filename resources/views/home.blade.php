@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="/svg/rohit.jpeg" height="150px" width="150px" class="rounded-circle">
        </div>
        <div class="col-9">
            <div><h1>{{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-2"><strong>21 </strong>posts</div>
                <div class="pl-2 pr-2"><strong>475 </strong>followers</div>
                <div class="pl-2"><strong>430 </strong>following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
        <div><a href="https://rohit645.github.io/">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4"><img class="w-75" src="https://picsum.photos/id/237/200/300"></div>
        <div class="col-4"><img class="w-75" src="https://picsum.photos/id/237/200/300"></div>
        <div class="col-4"><img class="w-75" src="https://picsum.photos/id/237/200/300"></div>
    </div>
</div>
@endsection
