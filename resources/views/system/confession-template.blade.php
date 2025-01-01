@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row confession-template-box">
                    @if (session('success'))
                <div class="col-12 alert alert-success ">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="col-12 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="col-12 confession-box">
                    <p>
                    {{$confession->content}}  
                    </p>
                </div>
                <div class="col-12 comment-box">
                    @if($confession->commentSwitch == 0)
                        <p class="comment-turn-off">
                            The comment for this confession is turned off.
                        </p>
                    @else
                    <div class="comment-box-child">
                        @foreach ($comment as $item)
                            <div class="suround-box">
                                <p class="user-id">USER ID: {{$item->userId}}</p>
                                <p class="timestamp">{{$item->created_at}}</p>
                            </div>
                            <div class="each-comment">
                                <p>
                                    {{$item->commentText}}
                                </p>
                            </div>
                            <div class="suround-box">
                                <a class="report">Report</a>
                            </div>
                            {{-- report button should be here --}}
                        @endforeach
                    </div>
                        <div class="comment-submission-box">
                            <form action="{{ route('comment.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="confessionId" value="{{ $confession->id }}">
                                <textarea name="commentText" id="commentText" placeholder="Write your comment..." required></textarea>
                                <button type="submit">Send comment</button>
                            </form>
                        </div>                    
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection