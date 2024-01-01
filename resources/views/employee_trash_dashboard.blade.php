@if (Session::has('add'))
    <div class="alert-success text-bg-success">
        <h5>{{ Session::get('add') }}</h5>
    </div>
@elseif (Session::has('delete'))
    <div class="alert-danger text-bg-success">
        <h5>{{ Session::get('delete') }}</h5>
    </div>
@elseif (Session::has('deleteAll'))
    <div class="alert-danger text-bg-danger">
        <h5 class="text-center">{{ Session::get('deleteAll') }}</h5>
    </div>
    @elseif (Session::has('update'))
    <div class="alert-danger text-bg-danger">
        <h5>{{ Session::get('update') }}</h5>
    </div>
@endif
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>
    <div class="container-sm mt-5">
        <h3 class="text-center bg-info" sticky-bottom>Employee Trash Dashboard</h3>
        {{-- Employee Dashboard Heading With Helper --}}
        <table class="table  table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th>Namee</th>
                    <th> Address</th>
                    <th> Join Date</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $emp)
                    <tr>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->address }}</td>
                        <td>{{ Carbon\Carbon::createFromDate($emp->join_date)->format('d-m-Y') }}
                        </td>
                        <td><a name="" id="" class="btn btn-primary"
                                href="{{ url('/employee/restore/') }}/{{ $emp->id }}" role="button">restore</a>
                            <a name="" id="" class="btn btn-primary"
                                href="{{ url('/employee/delete/') }}/{{ $emp->id }}" role="button">Delete Permanantely</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row flex-row flex-wrap justify-content-between">
            <a name="" id="" class="col-5 btn btn-primary btn-lg btn-block mb-5"
                href="{{ url('employee-dashboard') }}" role="button">Return to Dashboard</a>
            <a name="" id="" class="col-5 btn btn-primary btn-lg btn-block mb-5"
                href="{{ url('/employee/deleteAll') }}" role="button">DeleteAll</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
