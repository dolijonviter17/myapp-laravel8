<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                {{ $question->answers_count . " " . Str::plural('Answer', $question->answers_count) }}</h4>
        </div>
        @include('layouts._messages')
        <div class="card-body">
            @foreach ($answers as $answer)
            <div class="row">
                <div class="col-md-10">
                    <div class="media-body mt-1">
                        <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                    </div>
                    <p class="card-text">{!! $answer->body_html !!}</p>
                    <span class="text-muted">Answered {{ $answer->created_date }}</span>
                    <a href="{{ $answer->user->url }}" class="pr-2">
                        <img src="{{ $answer->user->avatar }}">
                    </a>
                    <hr>


                </div>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-body">
                            <a title="This Answer is usefull" class="simple-text {{ Auth::guest() ? 'off' : '' }}"
                                onclick="event.preventDefault(); document.getElementById('up-vote-answer-{{ $answer->id }}').submit();">
                                <div class="font-icon-detail">
                                    <i class="now-ui-icons arrows-1_minimal-up"></i>
                                </div>
                                <form id="up-vote-answer-{{ $answer->id }}" action="/answers/{{ $answer->id }}/vote"
                                    method="POST" style="display:none;">
                                    @csrf
                                    <input type="hidden" name="vote" value="1">
                                </form>
                            </a>
                            <span class="vote-count">{{$answer->votes_count}}</span>

                            <a title="This Answer is not usefull" class="simple-text {{ Auth::guest() ? 'off' : '' }}"
                                onclick="event.preventDefault(); document.getElementById('down-vote-answer-{{ $answer->id }}').submit();">
                                <div class="font-icon-detail">
                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </div>
                                <form id="down-vote-answer-{{ $answer->id }}" action="/answers/{{ $answer->id }}/vote"
                                    method="POST" style="display:none;">
                                    @csrf
                                    <input type="hidden" name="vote" value="-1">
                                </form>
                            </a>

                            @can ('accept', $answer)
                            <a title="Mark this best answer" class="{{ $answer->status }} logo-normal"
                                onclick="event.preventDefault(); document.getElementById('accept-answer-{{ $answer->id }}').submit();">
                                <div class="font-icon-detail">
                                    <i class="now-ui-icons ui-1_check"></i>
                                </div>
                            </a>
                            <form id="accept-answer-{{ $answer->id }}"
                                action="{{ route('answers.accept', $answer->id) }}" method="POST" style="display:none;">
                                @csrf
                            </form>
                            @else
                            @if ($answer->is_best)

                            <a title="The question owner accepted this answer as best answer"
                                class="{{ $answer->status }} logo-normal">
                                <div class="font-icon-detail">
                                    <i class="now-ui-icons ui-1_check"></i>

                                </div>
                            </a>
                        </div>
                        @endif
                        @endcan

                    </div>
                    <div class="card">
                        <div class="card-body">
                            @can('update', $answer)
                            <a href="{{ route('questions.answers.edit', [$question->id, $answer->id]) }}">
                                <button class="btn btn-info btn-round" rel="tooltip">
                                    <i class="now-ui-icons ui-2_settings-90"></i> 
                                </button>
                            </a>
                            @endcan
                            @can('delete', $answer)
                            <form action="{{ route('questions.answers.destroy', [$question->id, $answer->id]) }}"
                                method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-round"
                                    onclick="return confirm('Are you sure?')">
                                    <i class="now-ui-icons ui-1_simple-remove"></i> 
                                </button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>






            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <td class="td-actions text-right">


                        </td>
                    </div>
                </div>

            </div>
        </div>




        @endforeach

    </div>
</div>
</div>
