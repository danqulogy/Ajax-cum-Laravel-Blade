<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employees Database</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/override.css')}}">

    </head>
    <body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{asset('images/bootstrap-solid.svg')}}" alt="" width="72" height="72">
            <h2>Company Name</h2>
            <p class="lead">Find an employee</p>
            <input class="form-control form-control-lg" id="searchInput" name="searchInput" type="text" placeholder="Enter employee ID">
            <br>
            <p id="notFoundMsg" class="text-center text-danger"></p>
        </div>

        <div id="employeeProfileElement" class="row">

            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Employee Profile: <span id="employeeName" class="text-success"></span></h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" id="firstName" class="form-control" id="firstName" placeholder="" value="" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" id="other_names" class="form-control" id="lastName" placeholder="" value="" required>

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Gender</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="gender" placeholder="Username" required>

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Date of Birth <span class="text-muted"></span></label>
                        <input type="email" class="form-control" id="dateOfBirth" placeholder="you@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="address">Hometown</label>
                        <input type="text" class="form-control" id="hometown" placeholder="1234 Main St" required>

                    </div>

                    <div class="mb-3">
                        <label for="address2">region <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="region" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="zip">Telephone</label>
                            <input type="text" class="form-control" id="telephone" placeholder="" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="zip">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="zip">House Number</label>
                            <input type="text" class="form-control" id="houseNumber" placeholder="" required>
                        </div>
                    </div>
                    <hr class="mb-4">


                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Update Profile</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    {{--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    {{--Demo javascript code--}}
    <script src="{{asset('app/main.js')}}"></script>
    </body>
</html>
