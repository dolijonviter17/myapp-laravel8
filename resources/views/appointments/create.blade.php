@extends('layouts.mytemplate')
@section('content')
    
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Appointments') }}
    {{-- <a href="{{route('questions.create')}}">Add Question</a> --}}
</h2>

<div class="card">
    <div class="card-header">
        {{-- {{ trans('cruds.appointment.title_singular') }} {{ trans('global.list') }} --}}
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("appointments.index") }}">
                Back
            </a>
        </div>
        
    </div>

    <div class="card-body">
    <form action="{{route('appointments.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="client_id">{{trans('cruds.appointment.fields.client') }}*</label>
            <select id="client_id" class="custom-select" name="client" required>
                @foreach($clients as $id => $client)
                <option value="{{ $id }}" {{ (isset($appointment) && $appointment->client ? $appointment->client->id : old('client_id')) == $id ? 'selected' : '' }}>{{ $client }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="client_id">{{trans('cruds.appointment.fields.employee') }}*</label>
            <select id="client_id" class="custom-select" name="client" required>
                @foreach($employees as $id => $employee)
                        <option value="{{ $id }}" {{ (isset($appointment) && $appointment->employee ? $appointment->employee->id : old('employee_id')) == $id ? 'selected' : '' }}>{{ $employee }}</option>
                    @endforeach
            </select>
        </div>


  
        

        <div class="form-group">
          <label for="">{{ trans('cruds.appointment.fields.start_time') }}*</label>
          <input type="date" id="start_time" name="start_time" class="form-control datetimepicker" value="{{ old('start_time', isset($appointment) ? $appointment->start_time : '') }}" required>
                @if($errors->has('start_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </em>
                @endif
          <small id="helpId" class="text-muted">{{ trans('cruds.appointment.fields.start_time_helper') }}</small>
        </div>

    


      

          <div class="form-group">
            <label for="">{{ trans('cruds.appointment.fields.finish_time') }}*</label>
            <input type="date" id="finish_time" name="finish_time" class="form-control datetimepicker" value="{{ old('finish_time', isset($appointment) ? $appointment->finish_time : '') }}" required>
                  @if($errors->has('finish_time'))
                      <em class="invalid-feedback">
                          {{ $errors->first('finish_time') }}
                      </em>
                  @endif
            <small id="helpId" class="text-muted">{{ trans('cruds.appointment.fields.finish_time_helper') }}</small>

        </div>

          <div class="form-group">
            <label for="">{{ trans('cruds.appointment.fields.price') }}*</label>
            <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($appointment) ? $appointment->price : '') }}" step="0.01">
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
            <small id="helpId" class="text-muted">{{ trans('cruds.appointment.fields.price_helper') }}</small>
          </div>

          <div class="form-group">
            <label for="">{{ trans('cruds.appointment.fields.comments') }}*</label>
            <textarea id="comments" name="comments" class="form-control ">{{ old('comments', isset($appointment) ? $appointment->comments : '') }}</textarea>
                @if($errors->has('comments'))
                    <em class="invalid-feedback">
                        {{ $errors->first('comments') }}
                    </em>
                @endif
            <small id="helpId" class="text-muted">{{ trans('cruds.appointment.fields.comments_helper') }}</small>
          </div>

          <div class="form-group {{ $errors->has('services') ? 'has-error' : '' }}">
            <label for="services">{{ trans('cruds.appointment.fields.services') }}
                <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
            <select name="services[]" id="services" class="form-control select2" multiple="multiple">
                @foreach($services as $id => $services)
                    <option value="{{ $id }}" {{ (in_array($id, old('services', [])) || isset($appointment) && $appointment->services->contains($id)) ? 'selected' : '' }}>{{ $services }}</option>
                @endforeach
            </select>
            @if($errors->has('services'))
                <em class="invalid-feedback">
                    {{ $errors->first('services') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.appointment.fields.services_helper') }}
            </p>
        </div>


        <div>
            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
        </div>

        

    </form>

    </div>
</div>


@endsection

@section('script')
<script type="text/javascript">
  $(function () {
    $('.datetimepicker').datetimepicker();
});
      </script>
@endsection

