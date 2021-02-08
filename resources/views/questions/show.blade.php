<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Question') }}

            <a href="{{route('questions.create')}}">Add Question</a>
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            {!! $question->body_html !!}
                            <div class="float-right">
                                 <span class="text-muted">Answered {{ $question->created_date }}</span>
                                 <div class="media mt-2">
                                     <a href="{{ $question->user->url }}" class="pr-2">
                                         <img src="{{ $question->user->avatar }}">
                                     </a>
                                     <div class="media-body mt-1">
                                         <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                        
                    </div>
    
                    <div class="card-body">
                       {!! $question->body_html !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

