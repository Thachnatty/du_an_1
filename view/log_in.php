<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="log_in.css">
</head>

<body>
    <div class="form__log-in container my-5 py-5 z-depth-1 border rounded-1 shadow ">

        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">

                    <!-- Default form login -->
                    <form class="form__log-in--form text-center" action="#!">

                        <p class="h4 mb-4 fs-2">LOG IN</p>

                        <!-- user name -->
                        <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="User name">

                        <!-- Password -->
                        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4"
                            placeholder="Password">

                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Remember me -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                    <label class="custom-control-label" for="defaultLoginFormRemember">Remember
                                        me</label>
                                </div>
                            </div>
                            <div class="form__log-in--forgot--password">
                                <!-- Forgot password -->
                                <a href="">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <div class="d-grid gap-2">
                            <button class="form__log-in--btn--submit btn btn-info btn-block my-4 px-5 py-2 text-light"
                                type="submit">LOG IN</button>
                        </div>


                        <!-- Register -->
                        <p>Not a member?
                            <a href="user/register.php?act=register" class="form__log-in--register">Register</a>
                        </p>
                        <!-- Social login -->
                        <p>or sign in with:</p>

                        <a href="#" class="mx-1 mx-2" role="button"><i class="fab fa-facebook-f">
                            </i></a>
                        <a href="#" class="mx-1 mx-2" role="button"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="mx-1 mx-2" role="button"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="mx-1 mx-2" role="button"><i class="fab fa-github"></i></a>

                    </form>
                    <!-- Default form login -->
                    

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Content-->


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