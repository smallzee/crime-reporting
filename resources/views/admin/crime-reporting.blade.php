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

                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Reporter Name</th>
                            <th>Reporter Mobile-No</th>
                            <th>Crime Category</th>
                            <th>Crime Code</th>
                            <th>Crime Committed</th>
                            <th>Crime Report Address</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Reporter Name</th>
                            <th>Reporter Mobile-No</th>
                            <th>Crime Category</th>
                            <th>Crime Code</th>
                            <th>Crime Committed</th>
                            <th>Crime Report Address</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection