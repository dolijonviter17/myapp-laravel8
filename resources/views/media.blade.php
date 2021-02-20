@extends('layouts.uitemplate')

@section('title', 'User Role')
@section('style')
<style>
    .all-icons [class*=now-ui-icons] {
        font-size: 5px;
        /* text-align: center; */
    }

    .font-icon-detail .now-ui-icons {
        font-size: 32px;
    }
</style>
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{$question->title}}</h4>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-body">
                            <p class="lead">
                                Asked by
                                <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                <small class="text-muted">{{ $question->created_date }}</small>
                            </p>

                            <p class="card-text">
                                {!! $question->body_html !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body vote-control">
                                <a title="This question is usefull" class="simple-text {{ Auth::guest() ? 'off' : '' }}"
                                    onclick="event.preventDefault(); document.getElementById('up-vote-question-{{ $question->id }}').submit();">
                                    <div class="font-icon-detail">
                                        <i class="now-ui-icons arrows-1_minimal-up"></i>
                                    </div>
                                    <form id="up-vote-question-{{ $question->id }}"
                                        action="/questions/{{ $question->id }}/vote" method="POST"
                                        style="display:none;">
                                        @csrf
                                        <input type="hidden" name="vote" value="1">
                                    </form>
                                </a>
                                <span class="vote-count">{{$question->votes_count}}</span>
                                <a title="This question is not usefull"
                                    class="simple-text {{ Auth::guest() ? 'off' : '' }}"
                                    onclick="event.preventDefault(); document.getElementById('down-vote-question-{{ $question->id }}').submit();">
                                    <div class="font-icon-detail">
                                        <i class="now-ui-icons arrows-1_minimal-down"></i>
                                    </div>
                                    <form id="down-vote-question-{{ $question->id }}"
                                        action="/questions/{{ $question->id }}/vote" method="POST"
                                        style="display:none;">
                                        @csrf
                                        <input type="hidden" name="vote" value="-1">
                                    </form>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body favorite-control">
                                <a title="Click to mark as favorite question (Click again to undo)"
                                    class="simple-text {{ Auth::guest() ? 'off' : (($question->is_favorited ? 'favorited' : '')) }}"
                                    onclick="event.preventDefault(); document.getElementById('favorite-question-{{ $question->id }}').submit();">
                                    <div class="font-icon-detail">
                                        <i class="now-ui-icons ui-2_favourite-28"></i>
                                        <span>{{$question->favorites_count}}</span>
                                    </div>
                                </a>
                                <form id="favorite-question-{{ $question->id }}"
                                    action="/questions/{{ $question->id }}/favorites" method="POST"
                                    style="display:none;">
                                    @csrf
                                    @if ($question->is_favorited)
                                    @method ('DELETE')
                                    @endif
                                </form>
                            </div>
                        </div>
                        <a href="{{route('questions.index')}}" class="btn btn-primary">Back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- @include('answers._index', [
        'answers' => $question->answers,
        'answersCount' => $question->answer_count
        ])
        @include('answers._create') --}}

    {{-- <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Answer by
                </h4>
            </div>
        </div>
    </div>




</div> --}}
@endsection
