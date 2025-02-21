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
    <link rel="shortcut icon" href="{{asset('assets/images/icons/fabicon.png')}}" type="image/x-icon">
</head>

<body>

    @include('admin.common.topbar')

    <div class="container-fluid">
        <div class="row">
            @include('admin.common.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add New User</h1>
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
                @if (session('login'))
                    <div class="alert alert-success" role="alert">
                        {{session('login')}}
                    </div>
                @endif
                {{-- main content start fron here --}}
                    <h1 class="text-center text-danger">Add user</h1>
                {{-- main content end fron here --}}                
                @include('admin.common.footer')
            </main>
        </div>
    </div>
    
</body>

</html>
