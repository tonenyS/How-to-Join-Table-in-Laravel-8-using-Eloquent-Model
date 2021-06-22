<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Join Table in Laravel 8 using Eloquent Model</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <br />
        <h1 class="text-center text-primary">How to Join Multiple Table in Laravel 8 using Eloquent Model</h1>
        <br />
        <div class="table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ProjectName</th>
                        <th>BuildingSum</th>
                        <th>FmProgress</th>
                        <th>DesingName</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->project_name }}</td>
                            <td>{{ $row->buildingSum }}</td>
                            <td>{{ $row->fmProgress }}</td>
                            <td>{{ $row->desingBy }}</td>
                            <td>{{ $row->status }}</td>
                            <td>
                                <form method="PUT">
                                    <input type="submit" value='Edit' " class=" btn btn-warning ">
                                        </form>
                                    </td>
                                    <td>
                                        <form method="post">
                                    <input type="submit" value='Delete' class="btn btn-danger deleteForm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</html>
