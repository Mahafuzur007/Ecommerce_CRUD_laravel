@extends('admin.layout.master')

@section('title', 'Create')

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
                    <h2 class="heading-section">Add New Car</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('products.index')}}" class="btn btn-primary mt-2 ms-2 ">List</a>
                    <div class="d-flex p-2 bd-highlight">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="text" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="text">
                            </div>
                            <div class="col-md-6">
                                <label for="text" class="form-label">Car Model</label>
                                <input type="text" class="form-control" id="test">
                            </div>
                            <div class="col-md-6">
                                <label for="text" class="form-label">Price</label>
                                <input type="text" class="form-control" id="text">
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image" accept="image/*" />
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Is Active
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add Car</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection