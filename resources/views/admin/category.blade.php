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
                        <a class="btn btn-success" style="float:left;margin-right:20px;" href="#">ADD Category</a>
                    </div>
                </div>
                <section>
                    <div style="overflow-x:auto;">
                        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    <td>Row:1 Cell:1</td>
                                    <td>Row:1 Cell:2</td>
                                    <td>Row:1 Cell:3</td>
                                    <td>Row:1 Cell:4</td>
                                    <td>Row:1 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:2 Cell:1</td>
                                    <td>Row:2 Cell:2</td>
                                    <td>Row:2 Cell:3</td>
                                    <td>Row:2 Cell:4</td>
                                    <td>Row:2 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:3 Cell:1</td>
                                    <td>Row:3 Cell:2</td>
                                    <td>Row:3 Cell:3</td>
                                    <td>Row:3 Cell:4</td>
                                    <td>Row:3 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:4 Cell:1</td>
                                    <td>Row:4 Cell:2</td>
                                    <td>Row:4 Cell:3</td>
                                    <td>Row:4 Cell:4</td>
                                    <td>Row:4 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:5 Cell:1</td>
                                    <td>Row:5 Cell:2</td>
                                    <td>Row:5 Cell:3</td>
                                    <td>Row:5 Cell:4</td>
                                    <td>Row:5 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:6 Cell:1</td>
                                    <td>Row:6 Cell:2</td>
                                    <td>Row:6 Cell:3</td>
                                    <td>Row:6 Cell:4</td>
                                    <td>Row:6 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:7 Cell:1</td>
                                    <td>Row:7 Cell:2</td>
                                    <td>Row:7 Cell:3</td>
                                    <td>Row:7 Cell:4</td>
                                    <td>Row:7 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:8 Cell:1</td>
                                    <td>Row:8 Cell:2</td>
                                    <td>Row:8 Cell:3</td>
                                    <td>Row:8 Cell:4</td>
                                    <td>Row:8 Cell:5</td>
                                </tr>
                                <tr>
                                    <td>Row:9 Cell:1</td>
                                    <td>Row:9 Cell:2</td>
                                    <td>Row:9 Cell:3</td>
                                    <td>Row:9 Cell:4</td>
                                    <td>Row:9 Cell:5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                @include('admin.common.footer')
            </main>
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
