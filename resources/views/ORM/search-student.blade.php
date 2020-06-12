<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top:30px">
        <div class="form">
            <form action="{{ route('getStudent') }}" method="POST">
                @csrf
                <div class="form-group col-sm-4">
                    <label>ID</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group col-sm-4">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group col-sm-4">
                    <label>Class</label>
                    <input type="text" class="form-control" name="class">
                </div>
                <input type="submit" class="btn btn-primary" value="Tìm kiếm">
            </form>
        </div>

        <hr>

        <div class="result">
            <h3>Result</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                    </tr>
                </thead>
                <tbody>
                    @isset ($result)
                    @foreach ($result as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['class'] }}</td>
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
