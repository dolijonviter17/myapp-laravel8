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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-employee">
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
<script>
    $('.datatable-employee').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('api.employee')}}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
 
</script>

@endsection

