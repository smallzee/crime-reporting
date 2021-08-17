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

                <form action="{{url('admin/create_new_crime_category')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Crime Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="Crime Name" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Crime Code</label>
                        <input type="text" class="form-control" required name="code" placeholder="Crime Code" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Crime Penalty</label>
                        <textarea name="crime_penalty" class="form-control" id="" placeholder="Crime Penalty" required style="resize: none"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="" class="btn btn-danger" value="Submit" id="">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection