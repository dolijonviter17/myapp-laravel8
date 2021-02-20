@extends('layouts.uitemplate')

@section('title', 'User Role')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Questions</h4>
                @include('layouts._messages')
                <a href="{{route('questions.create')}}" class="btn btn-primary btn-round" role="button"
                    aria-disabled="true">
                    Add Question
                </a>
            </div>
            @foreach ($questions as $question)
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body vote">
                                <strong>{{ $question->votes_count }}</strong>
                                {{ Str::plural('vote', $question->votes_count) }}
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body status {{ $question->status }}">
                                <strong>{{ $question->answers_count }}</strong>
                                {{ Str::plural('answer', $question->answers_count) }}
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body view">
                                {{ $question->views . " " . Str::plural('view', $question->views) }}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4><a href="{{ $question->url }}">{{ $question->title }}</a></h4>

                            </div>
                            <div class="card-body">
                                <p class="card-text">Asked by
                                    <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                    <small class="text-muted">{{ $question->created_date }}</small>
                                </p>
                                <p class="card-text">
                                    {{ Str::limit($question->body, 250) }}
                                </p>
                                
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-2">
                        @can('update', $question)
                        <a href="{{route('questions.edit', $question->id)}}">
                            <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                                <i class="now-ui-icons ui-2_settings-90"></i>
                            </button>
                        </a>
                        @endcan
                        @can('delete', $question)
                        <form action="{{ route('questions.destroy', $question->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('Are you sure?')"
                                class="btn btn-danger btn-round">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                        </form>
                        @endcan

                    </div>

                </div>
            </div>
            @endforeach

        </div>
        {{$questions->links()}}
    </div>
</div>




@endsection
