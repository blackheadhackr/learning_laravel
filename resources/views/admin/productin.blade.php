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
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/fabicon.png') }}" type="image/x-icon">
</head>

<body>

    @include('admin.common.topbar')

    <div class="container-fluid">
        <div class="row">
            @include('admin.common.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Product</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"style="float:left;margin-right:20px;" href="#">ADD
                            Product</a>
                    </div>
                </div>
                <section>
                    <div style="overflow-x:auto; table-responsive">

                        <table id="producttable" class="table table-striped table-bordered-success" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Laptop Name</th>
                                    <th>Quality</th>
                                    <th>Model Number</th>
                                    <th>image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($catg as $a)
                                    <tr id="{{ $a->id }}">
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $a->name }}</td>
                                        <td>{{ $a->quality }}</td>
                                        <td>{{ $a->model_no }}</td>
                                        <td><img src="{{ asset('storage/storage/' . $a->img_name) }}"
                                                alt="Uploaded Image" style="width:12rem"></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-success main-edit"
                                                    id="{{ $a->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#editmodel"><i
                                                        class="bi bi-pencil-fill"></i></button>
                                                <button type="button" class="btn btn-danger del-btn"
                                                    id="{{ $a->id }}"><i
                                                        class="bi bi-x-circle-fill"></i></button>
                                                <button type="button" class="btn btn-warning text-light"><i
                                                        class="bi bi-record-circle"></i></button>
                                                <button type="button" class="btn btn-info text-light"><i
                                                        class="bi bi-patch-check-fill"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </section>

                @include('admin.common.footer')
            </main>
        </div>
        {{-- pop up modal --}}

        <!--Add Modal -->

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header card-header">
                        <h5>Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-material" action="add-catg" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" placeholder="Product Name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="quality"
                                            class="form-control @error('quality') is-invalid @enderror"
                                            value="{{ old('quality') }}" placeholder="Quality (OEM)">
                                        <span class="text-danger">
                                            @error('quality')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="model"
                                            class="form-control @error('model') is-invalid @enderror"
                                            value="{{ old('model') }}" placeholder="Model Number">
                                        <span class="text-danger">
                                            @error('model')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input class="form-control @error('modelimg') is-invalid @enderror"
                                            type="file" name="modelimg">
                                        <span class="text-danger">
                                            @error('modelimg')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Add Catg</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
                    </div>
                </div>
            </div>
        </div>

        <!--Edit Modal -->
        <div class="modal fade" id="editmodel" tabindex="-1" aria-labelledby="editmodelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-light">
                        <h5 class="modal-title" id="editmodelLabel">Edit Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-material" action="edit-catg" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="editid">
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editname"
                                            class="form-control @error('editname') is-invalid @enderror"
                                            value="{{ old('editname') }}" placeholder="Product Name" id="editname">
                                        <span class="text-danger">
                                            @error('editname')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editquality"
                                            class="form-control @error('editquality') is-invalid @enderror"
                                            value="{{ old('editquality') }}" placeholder="Quality (OEM)"
                                            id="editquality">
                                        <span class="text-danger">
                                            @error('editquality')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editmodel"
                                            class="form-control @error('editmodel') is-invalid @enderror"
                                            value="{{ old('editmodel') }}" placeholder="Model Number"
                                            id="mainmodeledit">
                                        <span class="text-danger">
                                            @error('editmodel')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input class="form-control @error('editmodelimg') is-invalid @enderror"
                                            type="file" name="editmodelimg">
                                        <span class="text-danger">
                                            @error('editmodelimg')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Update Catg</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {

            document.title = "Card View DataTable";
            $("#producttable").DataTable({
                dom: '<"dt-buttons"Bf><"clear">lirtp',
                paging: true,
                autoWidth: true,
                buttons: [
                    // {
                    //     extend: 'colvis',
                    //     className: 'btn btn-outline-primary'
                    // },
                    {
                        extend: 'copyHtml5',
                        className: 'btn btn-outline-success'
                    },
                    {
                        extend: 'csvHtml5',
                        className: 'btn btn-outline-warning'
                    },
                    {
                        extend: 'excelHtml5',
                        className: 'btn btn-outline-info'
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-outline-danger'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-outline-secondary'
                    }
                ],
                // initComplete: function(settings, json) {
                //     $(".dt-buttons .btn-group").append(
                //         '<a id="cv" class="btn btn-primary" href="#">CARD VIEW</a>'
                //     );
                //     $("#cv").on("click", function() {
                //         if ($("#example").hasClass("card")) {
                //             $(".colHeader").remove();
                //         } else {
                //             var labels = [];
                //             $("#example thead th").each(function() {
                //                 labels.push($(this).text());
                //             });
                //             $("#example tbody tr").each(function() {
                //                 $(this)
                //                     .find("td")
                //                     .each(function(column) {
                //                         $("<span class='colHeader'>" + labels[
                //                             column] + ":</span>").prependTo(
                //                             $(this)
                //                         );
                //                     });
                //             });
                //         }
                //         $("#example").toggleClass("card");
                //     });
                // }
            });
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            $(document).on('click','.main-edit', function() {
                var buttonId = $(this).attr('id');

                $.ajax({
                    url: "{{ route('single') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: buttonId
                    },
                    success: function(data) {
                        $('#editid').val(data.id);
                        $('#editname').val(data.name);
                        $('#editquality').val(data.quality);
                        $('#mainmodeledit').val(data.model_no);
                    }
                });
            });
            $(document).on('click','.del-btn', function() {
                var buttonId = $(this).attr('id');
                Swal.fire({
                title: "Really You Want To Delete ?",
                text: "You Won't be able to get it back :(",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('deleterecord') }}",
                        type: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: buttonId
                        },
                        success: function(data) {
                            if(data.result == 'success'){
                                Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                                });
                                setTimeout(function() {
                                    location.reload();
                                }, 5000);
                                
                            }
                        }
                    });
                }
                });
            });
        });
    </script> --}}
</body>

</html>
