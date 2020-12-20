<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>Main Layout</title>
</head>
<body>

    <div class="container" style="margin-top: 50px;">

        <div class="row">

            <div class="col-md-3">
                <ul class="list-group">
                    
                    <li class="list-group-item">
                        <a class="btn btn-success btn-sm"  href="{{ route('profile.create') }}">Add Profile</a>
                    </li>

                    <li class="list-group-item">
                        <a class="btn btn-success btn-sm"  href="{{ route('profile.index') }}">Show Profiles</a>
                    </li>

                    <li class="list-group-item">
                        <a class="btn btn-success btn-sm"  href="{{ route('continent.create') }}">Add Continent</a>
                    </li>


                    <li class="list-group-item">
                        <a class="btn btn-success btn-sm"  href="{{ route('continent.index') }}">Show Continents</a>
                    </li>


                </ul>
            </div>

            <div class="col-md-9">

                @yield('content')

            </div>

        </div>


    </div>


    
</body>
</html>