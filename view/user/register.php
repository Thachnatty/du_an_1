<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="register.css">

</head>

<body>
    <!-- container form register -->
    <div class="form-register container my-5 py-5 z-depth-1 border rounded-1 shadow">

        <h3 class="mb-4 text-center">REGISTER</h3>

        <!-- form register -->
        <form action="index.php?act=register" method="post" class="mx-5"  enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="username">User name</label>
                <input type="text" class="form-control" autofocus>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="password">Password</label>
                <input type="password" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="">Password again</label>
                <input type="password" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="email">Email</label>
                <input type="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="phone">Phone</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="address">Address</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="avatar">Avatar</label>
                <input type="file" class="form-control">
            </div>

            <input type="submit" class="btn form-register__btn--submit mt-3"  name="register" value="register">
            
            </input>

        </form>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>

</html>