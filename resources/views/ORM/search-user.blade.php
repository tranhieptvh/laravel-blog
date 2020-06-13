<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search User</title>
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
            <form action="{{ route('getUser') }}" method="POST">
                @csrf
                <div class="form-group col-sm-4">
                    <label>User_ID</label>
                    <input type="text" class="form-control" name="user_id">
                </div>
                <div class="form-group col-sm-4">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone_number">
                </div>
                <div class="form-group col-sm-4">
                    <label>Role_name</label>
                    <input type="text" class="form-control" name="role_name">
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
                        <th scope="col">Fullname</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Role_name</th>
                    </tr>
                </thead>
                <tbody>
                    @isset ($result)
                    {{-- @php
                    dd($result->first()->phones->number);
                    @endphp --}}
                    @foreach ($result as $item)
                    <tr>
                        <td>{{ $item->first_name. ' ' .$item->last_name }}</td>
                        <td>{{ $item->phones->number }}</td>
                        {{-- <td>{{ $item->roles->name }}</td> --}}
                        @php
                        $roles = $item->roles;
                        @endphp
                        @foreach ($roles as $r)
                        <td>{{ $r['name'] }}</td>
                        @endforeach
                    </tr>
                    @endforeach
                    @endisset
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
