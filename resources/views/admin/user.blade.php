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
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\User::orderBy('id','desc')->get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{$value->email_address}}</td>
                                <td>{{$value->full_name}}</td>
                                <td>{{$value->phone_number}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection