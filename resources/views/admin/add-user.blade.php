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

                <form action="{{url('admin/create_new_admin')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" required name="email" placeholder="Email Address" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" required placeholder="Full Name" name="full_name" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" required placeholder="Phone Number"  name="phone_number" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" required name="password" placeholder="Password" id="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-danger" value="Submit" name="" id="">
                    </div>
                </form>

            </div>
        </div>


    </div>

@endsection