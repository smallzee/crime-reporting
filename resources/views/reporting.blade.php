<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $page_title }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <style>
            .form-control{
                height: 45px;
            }
            body{
                font-family: 'Open Sans', sans-serif;
                font-weight: 400;
                font-size: 14px;
            }
            label{
                margin-bottom: 10px;
            }
            .form-group{
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>

    <div style="margin: 10px">
        <div class="container">
            <form action="{{url('crime_report')}}" method="post">

                @csrf
                <div class="row">
                    <div class="col-sm-12">
                       <div class="form-group">
                           <label for="">Crime Reporter Name</label>
                           <input type="text" class="form-control" required placeholder="Crime Reporter Name" name="reporter_name" id="">
                       </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Crime Reporter Mobile-No</label>
                            <input type="text" name="reporter_mobile" class="form-control" placeholder="Crime Reporter Mobile-No" id="">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Crime Category</label>
                            <select name="crime_category" id="" class="form-control">
                                <option value="" disabled selected>Select</option>
                                @foreach(\App\Category::get() as $value)
                                    <option value="{{$value->id}}"> {{ ucwords($value->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Crime Report Location</label>
                            <input type="text" class="form-control" required placeholder="Crime Report Location" name="offence_location" id="">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Crime Report Details</label>
                            <textarea name="offence" class="form-control" required placeholder="Crime Report Details" id="" style="resize: none; min-height: 100px;"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group mt-3">
                        <input type="submit" style="width: 100%; background: #01579B; font-size: 15px; border: #01579B solid thin;" class="btn btn-lg btn-primary btn-block" value="Report Crime" name="add" id="">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>
</html>
