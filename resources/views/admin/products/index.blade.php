@extends('admin.layout.master')

@section('title', 'Car List')

@section('content')

<head>
    <title>Car List</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5 mt-5">
                    <h2 class="heading-section">Car List</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center mb-4">
                        Car Management System
                    </h4>
                    <a href="{{route('products.create')}}" class="btn btn-primary">Add New</a>
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Company Name</th>
                                    <th>Car Model</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Is Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="scope">.com</th>
                                    <td>1 Year</td>
                                    <td>$70.00</td>
                                    <td>$5.00</td>
                                    <td>$5.00</td>
                                    <td>
                                        <a href="{{route('products.edit')}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('products.show')}}" class="btn btn-info">View</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope">.net</th>
                                    <td>1 Year</td>
                                    <td>$75.00</td>
                                    <td>$5.00</td>
                                    <td>$5.00</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope">.org</th>
                                    <td>1 Year</td>
                                    <td>$65.00</td>
                                    <td>$5.00</td>
                                    <td>$5.00</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope">.biz</th>
                                    <td>1 Year</td>
                                    <td>$60.00</td>
                                    <td>$5.00</td>
                                    <td>$5.00</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope">.info</th>
                                    <td>1 Year</td>
                                    <td>$50.00</td>
                                    <td>$5.00</td>
                                    <td>$5.00</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope border-bottom-0">
                                        .me
                                    </th>
                                    <td class="border-bottom-0">1 Year</td>
                                    <td class="border-bottom-0">$45.00</td>
                                    <td class="border-bottom-0">$5.00</td>
                                    <td class="border-bottom-0">$5.00</td>
                                    <td class="border-bottom-0">
                                        <a href="#" class="btn btn-primary">Sign Up</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"812f3c6688bd5f7e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}'
        crossorigin="anonymous"></script>
</body>

@endsection