<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SQL Buddy - @yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"
          integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body id="sqlbuddy">
    @include('common.nav')

    <sqlbuddy inline-template>
        <div class="sqlbuddy">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                        @include('common.sidebar')
                    </div>
                    <div class="col-md-10 col-sm-9">
                        <div class="alert alert-danger alert-dismissible" v-if="error">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            @{{ error }}
                        </div>

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </sqlbuddy>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"
            integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7"
            crossorigin="anonymous"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>