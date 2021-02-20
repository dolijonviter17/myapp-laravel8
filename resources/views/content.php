@extends('layouts.uitemplate')

@section('title', 'User Role')
@section('style')
<style>
    .all-icons [class*=now-ui-icons] {
        font-size: 5px;
        /* text-align: center; */
    }

    .now-ui-icons {
        margin: 2px;
        margin-top: 0;
    }
</style>
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Question</h4>
                    <a href="" class="btn btn-primary btn-round"
                    role="button" aria-disabled="true">
                        Add Question
                    </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body vote">
                                vote
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body status">
                                Status
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body view">
                                View
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p>Asked by</p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, rerum, ut iusto ea aspernatur aperiam, beatae accusamus corrupti repudiandae deleniti laudantium in quisquam ipsum adipisci possimus. Laboriosam officia doloremque autem?

                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-warning btn-round">
                            <i class="now-ui-icons ui-2_settings-90"></i> Edit
                          </button>
                          <button class="btn btn-danger btn-round">
                            <i class="now-ui-icons ui-1_simple-remove"></i> Delete
                          </button>
                    </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
