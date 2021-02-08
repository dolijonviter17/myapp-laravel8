@extends('layouts.mytemplate')
@section('content')
    
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Employee') }}
    {{-- <a href="{{route('questions.create')}}">Add Question</a> --}}
</h2>

<div class="card">
    <div class="card-header">
        {{-- {{ trans('cruds.appointment.title_singular') }} {{ trans('global.list') }} --}}
        {{-- <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("appointments.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.appointment.title_singular') }}
            </a>
        </div> --}}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-employee"
        id="customers-table">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        Created_at
                    </th>
                    <th>
                        Update_at
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

<script id="details-template" type="text/x-handlebars-template">
    @verbatim
    <table class="table">
        <tr>
            <td>Full name:</td>
            <td>{{name}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{email}}</td>
        </tr>
        <tr>
            <td>Extra info:</td>
            <td>And any further details here (images etc)...</td>
        </tr>
    </table>
    @endverbatim
</script>

<script>
    var template = Handlebars.compile($('#details-template').html());
    var table = $('#customers-table').DataTable({
        processing: true,
            serverSide: true,
            ajax: '{{ route('api.details') }}',
            columns: [
              {
                "className":      'details-control',
                "orderable":      false,
                "searchable":     false,
                "data":           null,
                "defaultContent": ''
              },
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              { data: 'created_at', name: 'created_at' },
              { data: 'updated_at', name: 'updated_at' },
            ],
            order: [[1, 'asc']]
    });

    $('#customers-table tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
              // This row is already open - close it
              row.child.hide();
              tr.removeClass('shown');
            }
            else {
              // Open this row
              row.child( template(row.data()) ).show();
              tr.addClass('shown');
            }
          });
</script>

@endsection

