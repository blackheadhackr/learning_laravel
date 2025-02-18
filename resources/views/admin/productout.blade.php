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
                    <h1 class="h2">Product Out</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"style="float:left;margin-right:20px;" href="#">Out
                            Product</a>
                    </div>
                </div>
                <section>
                    @if (session('success')) <div class="alert alert-success" role="alert"> {{session('success')}} </div> @endif
                    @if (session('error')) <div class="alert alert-danger" role="alert"> {{session('error')}} </div> @endif

                    <div style="overflow-x:auto; table-responsive">

                        <table id="producttable" class="table table-striped table-bordered-success" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Product Name</th>
                                    <th>Model Number</th>
                                    <th>Alloted To</th>
                                    <th>Ticket_no</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($product as $a)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $a->name }}</td>
                                        <td>{{ $a->model_no }}</td>
                                        <td>{{ $a->alloted_to }}</td>
                                        <td>{{ $a->ticket_no }}</td>
                                        <td>{{ $a->quantity }}</td>
                                        <td>{{ $a->date }}</td>
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
                        <h5>Out Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-material" action="{{route('outprod')}}" method="post">
                                    @csrf
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" placeholder="Product Name..." list="product_name">
                                        <span class="text-danger">
                                            @error('name') {{ $message }} @enderror
                                        </span>
                                            <datalist id="product_name">
                                                @foreach ($da as $a)
                                                <option value="{{$a->name}}">
                                                @endforeach
                                            </datalist>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="modelno"
                                            class="form-control @error('modelno') is-invalid @enderror"
                                            value="{{ old('modelno') }}" placeholder="Model Number..." list="model_no">
                                        <span class="text-danger">
                                            @error('modelno')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <datalist id="model_no">
                                            @foreach ($dat as $a)
                                            <option value="{{$a->model_no}}">
                                            @endforeach
                                        </datalist>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="alloted"
                                            class="form-control @error('alloted') is-invalid @enderror"
                                            value="{{ old('alloted') }}" placeholder="Alloted Through...">
                                        <span class="text-danger">
                                            @error('alloted')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="ticketno"
                                            class="form-control @error('ticketno') is-invalid @enderror"
                                            value="{{ old('ticketno') }}" placeholder="ticket number...">
                                        <span class="text-danger">
                                            @error('ticketno')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="quantity"
                                            class="form-control @error('quantity') is-invalid @enderror"
                                            value="{{ old('quantity') }}" placeholder="Quantity..">
                                        <span class="text-danger">
                                            @error('quantity')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="date" name="date"
                                            class="form-control @error('date') is-invalid @enderror"
                                            value="{{ old('date') }}" placeholder="Quantity..">
                                        <span class="text-danger">
                                            @error('date')
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
                                <form class="form-material" action="{{route('out_update')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" id="hiddenid">
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editname"
                                            class="form-control @error('editname') is-invalid @enderror"
                                            value="{{ old('editname') }}" placeholder="Product Name..." list="product_name" id="edit_name">
                                        <span class="text-danger">
                                            @error('editname')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                            <datalist id="product_name">
                                                @foreach ($da as $a)
                                                <option value="{{$a->name}}">
                                                @endforeach
                                            </datalist>
                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editmodelno"
                                            class="form-control @error('editmodelno') is-invalid @enderror"
                                            value="{{ old('editmodelno') }}" placeholder="Model Number..." list="model_no" id="edit_model">
                                        <span class="text-danger">
                                            @error('editmodelno')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <datalist id="model_no">
                                            @foreach ($dat as $a)
                                            <option value="{{$a->model_no}}">
                                            @endforeach
                                        </datalist>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editalloted"
                                            class="form-control @error('editalloted') is-invalid @enderror"
                                            value="{{ old('editalloted') }}" placeholder="Alloted To..." id="edit_rec">
                                        <span class="text-danger">
                                            @error('editalloted')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editticker"
                                            class="form-control @error('editticker') is-invalid @enderror"
                                            value="{{ old('editticker') }}" placeholder="Ticket Number..." id="edit_ticket">
                                        <span class="text-danger">
                                            @error('editticker')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="editquantity"
                                            class="form-control @error('editquantity') is-invalid @enderror"
                                            value="{{ old('editquantity') }}" placeholder="Quantity.." id="edit_que">
                                        <span class="text-danger">
                                            @error('editquantity')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <div class="form-group form-default form-static-label">
                                        <input type="date" name="editdate"
                                            class="form-control @error('editdate') is-invalid @enderror"
                                            value="{{ old('editdate') }}" placeholder="Quantity.." id="edit_date">
                                        <span class="text-danger">
                                            @error('editdate')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Add Catg</button>
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
    <script>
        $(document).ready(function() {
            $(document).on('click','.main-edit', function() {
                var buttonId = $(this).attr('id');

                $.ajax({
                    url: "{{ route('singleoutproduct') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: buttonId
                    },
                    success: function(data) {
                        $('#hiddenid').val(data.id);
                        $('#edit_name').val(data.name);
                        $('#edit_model').val(data.model_no);
                        $('#edit_rec').val(data.alloted_to);
                        $('#edit_ticket').val(data.ticket_no);
                        $('#edit_que').val(data.quantity);
                        $('#edit_date').val(data.date);
                    }
                });
            });

            // delete ajax start from here==========>
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
                        url: "{{ route('out_delete') }}",
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
    </script>
</body>

</html>
