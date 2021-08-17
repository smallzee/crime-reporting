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
                            <th>Crime Name</th>
                            <th>Crime Code</th>
                            <th>Crime Penalty</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach(\App\Category::get() as $value)
                            <tr>
                                <td>{{$sn++}}</td>
                                <td>{{ucwords($value->name)}}</td>
                                <td>{{$value->crime_code}}</td>
                                <td>{{$value->crime_penalty}}</td>
                                <td><a href="{{url('admin/edit-crime-category/'.$value->id)}}" class="btn btn-danger btn-sm">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection