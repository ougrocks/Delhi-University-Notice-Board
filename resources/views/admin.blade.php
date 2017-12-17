<!DOCTYPE html>
<html>

<head>
    <title>::DU Broadcaster Admin::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
    <!-- global css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="{{ asset('vendors/themify/css/themify-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-up">
<div class="preloader">
    <div class="loader_img"><img src="{{ asset('img/loader.gif') }}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 login-form">
            <div class="panel-header">

            </div>
            <div class="panel-body">
                <div class="row">
                    {{ Form::open(array('url' => 'admin')) }}
                    <div class="col-md-12">
                        <div class="form-group">
                        {{ Form::label('teachername','Teacher Name', array('class'=>'sr-only')) }}
                        {{ Form::text('teachername',null,array('class'=>'form-control  form-control-lg','placeholder'=>'Teacher Name')) }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                    {{ Form::label('course', 'Course', array('class'=>'sr-only')) }}
                    {{ Form::text('course',null,array('class'=>'form-control  form-control-lg','placeholder'=>'Course')) }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                    {{ Form::label('custom', 'Custom Message', array('class'=>'sr-only')) }}
                    {{ Form::text('custom',null,array('class'=>'form-control  form-control-lg','placeholder'=>'Custom Message')) }}
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                    {{ Form::submit('Submit',array('class'=>'btn btn-primary btn-block')) }}
                    {{ Form::close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('vendors/select2/js/select2.js') }}"></script>
<script src="{{ asset('vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/custom_js/register.js') }}"></script>
<!-- end of page level js -->
</body>

</html>
