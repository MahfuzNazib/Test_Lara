<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test </title>
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

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

                    <span class="loading"></span>
                </form>

            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/ajax_form_submit.js') }}"></script>


</body>

</html>
