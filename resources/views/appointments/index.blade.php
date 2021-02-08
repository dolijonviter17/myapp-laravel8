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
            <a class="btn btn-success" href="{{ route("appointments.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.appointment.title_singular') }}
            </a>
        </div>
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Appointment">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.client') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.employee') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.start_time') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.finish_time') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.price') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.comments') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.services') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>


    </div>
</div>


@endsection
@section('script')
<script>
   $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)


  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('appointments.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'client_name', name: 'client.name' },
{ data: 'employee_name', name: 'employee.name' },
{ data: 'start_time', name: 'start_time' },
{ data: 'finish_time', name: 'finish_time' },
{ data: 'price', name: 'price' },
{ data: 'comments', name: 'comments' },
{ data: 'services', name: 'services.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  $('.datatable-Appointment').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

</script>

@endsection

