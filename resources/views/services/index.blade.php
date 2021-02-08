@extends('layouts.template')
@section('content')
    
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Service') }}
    {{-- <a href="{{route('questions.create')}}">Add Question</a> --}}
</h2>

<div class="card-body">
    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Service">
        <thead>
            <tr>
                <th width="10">

                </th>
                <th>
                    {{ trans('cruds.service.fields.id') }}
                </th>
                <th>
                    {{ trans('cruds.service.fields.name') }}
                </th>
                <th>
                    {{ trans('cruds.service.fields.price') }}
                </th>
                <th>
                    &nbsp;
                </th>
            </tr>
        </thead>
    </table>


</div>


@endsection
@section('script')
<script>
   $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('services.index') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'price', name: 'price' },
            { data: 'actions', name: '{{ trans('global.actions') }}' }
        ]
    });
    
  });
   
</script>

@endsection

