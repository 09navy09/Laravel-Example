<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container-sm">
        <h3 class="text-center">{{$title}}</h3>
        <form action="{{$url}}" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" value="{{ $validate ? $employees->name : NULL }}">
                <label for="floatingInputValue">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="address" name="address" value="{{$validate ? $employees->address : NULL}}">
                <label for="floatingInputValue">Address</label>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="join_date" name="join_date" value="{{$validate ? $employees->join_date : NULL}}">
                <label for="floatingInputValue">Join Date</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
