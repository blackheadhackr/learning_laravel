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
                    <h1 class="h2">Category</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"style="float:left;margin-right:20px;" href="#">ADD
                            Category</a>
                    </div>
                </div>
                <section>
                    <div style="overflow-x:auto;">

                        <table id="example" class="table table-striped table-bordered-success" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Laptop Name</th>
                                    <th>Quality</th>
                                    <th>Model Number</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ABC</td>
                                    <td>50</td>
                                    <td>ABC1234</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-fill"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></button>
                                            <button type="button" class="btn btn-warning text-light"><i class="bi bi-record-circle"></i></button>
                                            <button type="button" class="btn btn-info text-light"><i class="bi bi-patch-check-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>ABC</td>
                                    <td>50</td>
                                    <td>ABC1234</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-fill"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></button>
                                            <button type="button" class="btn btn-warning text-light"><i class="bi bi-record-circle"></i></button>
                                            <button type="button" class="btn btn-info text-light"><i class="bi bi-patch-check-fill"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </section>

                @include('admin.common.footer')
            </main>
        </div>
        {{-- pop up modal --}}

        <!-- Modal -->

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header card-header">
                        <h5>Add Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-material" action="add-catg" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Product Name">
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="quality" class="form-control @error('quality') is-invalid @enderror"
                                            value="{{old('quality')}}" placeholder="Quality (OEM)">
                                            <span class="text-danger">@error('quality') {{$message}} @enderror</span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="model" class="form-control @error('model') is-invalid @enderror"
                                            value="{{old('model')}}" placeholder="Model Number">
                                            <span class="text-danger">@error('model') {{$message}} @enderror</span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input class="form-control @error('modelimg') is-invalid @enderror" type="file" name="modelimg">
                                        <span class="text-danger">@error('modelimg') {{$message}} @enderror</span>
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

    </div>

    <script>
        $(document).ready(function() {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = "Card View DataTable";
            // DataTable initialisation
            $("#example").DataTable({
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
</body>

</html>
