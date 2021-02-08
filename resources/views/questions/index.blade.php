<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Question') }}

            <a href="{{route('questions.create')}}">Add Question</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
               @include('layouts._messages') 
                @foreach ($questions as $question)

                <strong>{{ $question->votes }}</strong> {{Str::plural('vote', $question->votes)}}
                <strong>{{$question->status}}</strong>
                <strong>{{ $question->answers }}</strong> {{Str::plural('answer', $question->answers)}}
                <strong>{{ $question->views . " " . Str::plural('view', $question->views) }} </strong>                    <div class="card-body">
                      <h5 class="card-title">
                        <a href="{{ $question->url }}">{{$question->title}}</a>
                          </h5>
                          <a href="{{$question->user->url }}"> {{$question->user->name}}</a>
                          <small>{{$question->created_date}}</small>
                      <p class="card-text">{{Str::limit($question->body, 250)}}</p>

                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>

                    <form class="form-delete" method="post" action="{{ route('questions.destroy', $question->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>

                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>

                    <!-- Block level -->

                   
               
                @endforeach
                {{-- {{$questions->links()}} --}}
            </div>
        </div>
    </div>
</x-app-layout>

