<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Add User</title>
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
                {{-- main content start fron here --}}
                @if (session('msg'))
                    <div class="alert alert-success" role="alert">
                        {{session('msg')}}
                    </div>
                @endif
                @if (session('msgg'))
                    <div class="alert alert-danger" role="alert">
                        {{session('msgg')}}
                    </div>
                @endif
                <div class="container border rounded p-4" style="max-width:40rem;">
                    <h1 class="text-center text-danger">Add User</h1><hr>
                    <form action="{{route('adduser')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                          <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                          <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="pass" value="{{old('pass')}}">
                          <span class="text-danger">@error('pass') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                          <label for="cpass" class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" id="cpass" name="Cpass" value="{{old('Cpass')}}">
                          <span class="text-danger">@error('Cpass') {{$message}} @enderror</span>
                        </div>
                        {{-- =========== Button ============ --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                {{-- main content end fron here --}}
                @include('admin.common.footer')
            </main>
        </div>
    </div>
    
</body>

</html>
