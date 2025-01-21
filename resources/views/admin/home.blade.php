<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>
    @include('admin.common.headlink')
    
</head>

<body>

    @include('admin.common.topbar')

    <div class="container-fluid">
        <div class="row">
            @include('admin.common.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
                {{-- card section --}}
                <div class="row my-3">
                    <div class="col-md-4 my-2">
                        <div class="card bg-c-red total-card">
                            <div class="card-block">
                                <div class="text-left">
                                    <h4>489</h4>
                                    <p class="m-0">Total Comment</p>
                                </div>
                                <span class="label bg-c-red value-badges">15%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card bg-c-green total-card">
                            <div class="card-block">
                                <div class="text-left">
                                    <h4>489</h4>
                                    <p class="m-0">Total Comment</p>
                                </div>
                                <span class="label bg-c-green value-badges">15%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card bg-c-red total-card">
                            <div class="card-block">
                                <div class="text-left">
                                    <h4>489</h4>
                                    <p class="m-0">Total Comment</p>
                                </div>
                                <span class="label bg-c-red value-badges">15%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card bg-c-green total-card">
                            <div class="card-block">
                                <div class="text-left">
                                    <h4>489</h4>
                                    <p class="m-0">Total Comment</p>
                                </div>
                                <span class="label bg-c-green value-badges">15%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card bg-c-red total-card">
                            <div class="card-block">    
                                <div class="text-left">
                                    <h4>489</h4>
                                    <p class="m-0">Total Comment</p>
                                </div>
                                <span class="label bg-c-red value-badges">15%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card bg-c-green total-card">
                            <div class="card-block">
                                <div class="text-left">
                                    <h4>489</h4>
                                    <p class="m-0">Total Comment</p>
                                </div>
                                <span class="label bg-c-green value-badges">15%</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- new section --}}
                <div class="row my-3">
                    <div class="col-md-4 my-2">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Total Subscription</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                                <p class="m-b-0">48% From Last 24 Hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Total Subscription</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>7652</h4>
                                <p class="m-b-0">48% From Last 24 Hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Total Subscription</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                                <p class="m-b-0">48% From Last 24 Hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Total Subscription</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>7652</h4>
                                <p class="m-b-0">48% From Last 24 Hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Total Subscription</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                                <p class="m-b-0">48% From Last 24 Hours</p>
                            </div>
                        </div>
                    </div><div class="col-md-4 my-2">
                        <div class="card text-center order-visitor-card">
                            <div class="card-block">
                                <h6 class="m-b-0">Total Subscription</h6>
                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>7652</h4>
                                <p class="m-b-0">48% From Last 24 Hours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
