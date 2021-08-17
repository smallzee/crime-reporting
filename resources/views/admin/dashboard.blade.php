@extends('admin.layout')

@section('content')

    <div class="col-sm-12">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $page_title }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">

                <h5 class="page-header">Statistics</h5>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                Total Admin
                            </div>
                            <div class="panel-body">

                                <h2 class="text-center">{{ \App\User::count() }}</h2>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Total Crime Reporting
                            </div>
                            <div class="panel-body">

                                <h2 class="text-center">
                                    {{ \App\Reporting::count()  }}
                                </h2>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Total Crime Category
                            </div>
                            <div class="panel-body">
                                <h2 class="text-center">
                                    {{ \App\Category::count()  }}
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
