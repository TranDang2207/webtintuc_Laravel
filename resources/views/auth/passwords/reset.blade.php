<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="form-gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Change Password?</h2>
                        <p>You can reset your password here.</p>
                        <div class="panel-body">

                            <form id="register-form" role="form" autocomplete="off" class="form"
                                method="post" action="{{route('password.update')}}">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input id="email" name="email" value="{{ $email ?? old('email') }}"
                                            placeholder="email address" class="form-control" type="email">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                <label>New Password</label>
                                <div class="form-group pass_show">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="New Password">
                                    @error('password')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                <label>Confirm Password</label>
                                <div class="form-group pass_show">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Confirm Password">
                                    @error('password_confirmation')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block"
                                        value="Change Password" type="submit">
                                </div>

                                <input type="hidden" class="hide" name="token" id="token"
                                    value="{{ $token }}">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<style>
    .pass_show {
        position: relative
    }

    .pass_show .ptxt {

        position: absolute;

        top: 50%;

        right: 10px;

        z-index: 1;

        color: #f36c01;

        margin-top: -10px;

        cursor: pointer;

        transition: .3s ease all;

    }

    .pass_show .ptxt:hover {
        color: #333333;
    }

</style>
<script>
    $(document).ready(function() {
        $('.pass_show').append('<span class="ptxt">Show</span>');
    });


    $(document).on('click', '.pass_show .ptxt', function() {

        $(this).text($(this).text() == "Show" ? "Hide" : "Show");

        $(this).prev().attr('type', function(index, attr) {
            return attr == 'password' ? 'text' : 'password';
        });

    });
</script>
