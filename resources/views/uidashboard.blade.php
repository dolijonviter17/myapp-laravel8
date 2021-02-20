@extends('layouts.uitemplate')

@section('title', 'User Role')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Simple Table</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Job Position</th>
                            <th>Since</th>
                            <th class="text-right">Salary</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Andrew Mike</td>
                            <td>Develop</td>
                            <td>2013</td>
                            <td class="text-right">&euro; 99,225</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                    <i class="now-ui-icons users_single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>John Doe</td>
                            <td>Design</td>
                            <td>2012</td>
                            <td class="text-right">&euro; 89,241</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon">
                                  <i class="now-ui-icons users_single-02"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon">
                                  <i class="now-ui-icons ui-2_settings-90"></i>
                              </button>
                              <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
                                  <i class="now-ui-icons ui-1_simple-remove"></i>
                              </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Alex Mike</td>
                            <td>Design</td>
                            <td>2010</td>
                            <td class="text-right">&euro; 92,144</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-simple btn-icon btn-sm">
                                    <i class="now-ui-icons users_single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-simple btn-icon btn-sm">
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-simple btn-icon btn-sm">
                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
    </div>
</div>
@endsection
