
<div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h2>Your Answer</h2>
        </div>

        <form action="{{ route('questions.answers.store', $question->id) }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Input your answer</label>
              <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" id="answer-body" rows="7" name="body"></textarea>
              @if ($errors->has('body'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('body') }}</strong>
                </div>
                  
              @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    
    
        
      </div>
    </div>
  </div>


