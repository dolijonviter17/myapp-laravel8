@csrf
                              <input name="marker" value="selectModel" type="hidden">
                              <div class="form-group">
                                  <label>Title</label>
                                  <input 
                                      type="text"
                                      placeholder="Title Question"
                                      name="title"
                                      value="{{ old('title', $question->title) }}"
                                      id="question-title"
                                      class="form-control"
                                  >
                                  @if ($errors->has('title'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </div>
                                @endif
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Explain your question</label>
                                <textarea class="form-control" id="question-body" name="body" rows="3">
                                    {{ old('body', $question->body) }}
                                </textarea>

                                @if ($errors->has('body'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </div>
                                @endif
                              </div>
                              <button
                                  type="submit"
                                  class="btn btn-primary"
                              >
                              {{ $buttonText }}
                              </button>
                              <a 
                                  href="{{route('questions.index')}}"
                                  class="btn btn-primary"
                              >
                                  Return
                              </a>