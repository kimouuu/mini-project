<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('loginpost') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">IP Address</label>
                <input type="text" class="form-control @error('ip') is invalid @enderror" name="ip" aria-describedby="emailHelp">
                @error('ip')
                <div id="emailHelp" class="form-text alert alert-danger">{{$message}}</div>
                @enderror
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User</label>
                <input type="text" class="form-control @error('ip') is invalid @enderror" name="user" aria-describedby="emailHelp">
                @error('user')
                <div id="emailHelp" class="form-text alert alert-danger">{{$message}}</div>
                @enderror
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

     
</body>

</html>