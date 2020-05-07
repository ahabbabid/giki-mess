<html>
<head>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

    <body style="padding-top: 50px;">
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <form action="{{url('admin/student-check-in')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input  class="form-control" name="reg_number">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success form-control">

                    </div>
                </form>


            </div>
            <div class="row">
                @if(isset($student))


                        <example-component student="hello"></example-component>


                @endif
            </div>

        </div>

    </div>

    </body>

    <script src="{{asset('js/app.js')}}"></script>

</html>