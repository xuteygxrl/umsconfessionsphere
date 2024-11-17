@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($confession as $item)
            <div class="card my-4">
                <div class="card-header"><h6>User Id: {{$item->userId}}</h6></div>
                <div class="card-body">
                    <h6>User Confession </h6>
                    <p>Confession Category: {{$item->category->confessionName}}</p>
                    <p class="py-3" style="font-size: 25px">{{$item->content}}</p>

                    <div class="row">
                        <!-- Reject Button -->
                        <div class="col-6 d-flex justify-content-start">
                            <form action="{{ route('admin.confession.reject', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Reject</button>
                            </form>
                        </div>

                        <!-- Approve Button -->
                        <div class="col-6 d-flex justify-content-end">
                            <form action="{{ route('admin.confession.approve', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
