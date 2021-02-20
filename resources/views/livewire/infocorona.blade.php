@extends('layouts.app')
@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                {{ $totalConfirmed }}
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                {{$totalRecovered}}
            </div>
            <div class="col-4 text-danger">
                <h5>Deaths</h5>
                {{$totalDeath}}
            </div>
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">#</th>
                        <th class="px-4 py-2">Country</th>
                        <th class="px-4 py-2">Confirmed</th>
                        <th class="px-4 py-2">Death</th>
                        <th class="px-4 py-2">Recovered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($dataCorona as $key => $value)
                    @php
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                    @endphp
                    <tr>
                        <td class="border px-4 py-2">{{$no++}}</td>
                        <td class="border px-4 py-2">{{$key}}</td>
                        <td class="border px-4 py-2">
                            {{ $value[$days_count]['confirmed'] }}
                            @if ($increase != 0)
                            <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i>{{$increase}}</small>
                            @endif
                        </td>
                        <td class="border px-4 py-2">{{ $value[$days_count]['deaths'] }}</td>
                        <td class="border px-4 py-2">{{ $value[$days_count]['recovered'] }}</td>
                    
                    </tr>
                    @endforeach
                   
                    
             
                </tbody>

                {{-- {{ $dataCorona->links() }} --}}
            </table>
        </div>
    </div>
</div>
@endsection
