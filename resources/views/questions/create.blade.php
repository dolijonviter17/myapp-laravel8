@extends('layouts.uitemplate')

@section('title', 'Add New Question')

@section('content')
    
<div class="container-fluid">
    <div class="fade-in">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header"><h4>Create New Question</h4></div>
              <div class="card-body">
                  @if(Session::has('message'))
                      <div class="row">
                          <div class="col-12">
                              <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                          </div>
                      </div>
                  @endif            
                  <div class="row">
                      <div class="col-6">
                          <form method="POST" action="{{route('questions.store')}}">
                            @include ("questions._form", ['buttonText' => "Ask Question"])
                          </form>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

