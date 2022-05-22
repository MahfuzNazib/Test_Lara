<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/ajax_form_submit.js') }}"></script>
    {{-- <script src="{{  asset('backend/js/ajax_form_submit.js') }}"></script> --}}

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                
                <h5>Laravel Contact Form</h5>

                <form class="ajax-form" method="post" action="{{ route('test_service.submit') }}">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">

                    <label>Email</label>
                    <input type="email" name="email" class="form-control">

                    <label>Amount to pay (in USD)</label>
                    <input type="text" name="amount" class="form-control">

                    <button type="submit" class="btn btn-primary mt-4">
                        Submit
                    </button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>