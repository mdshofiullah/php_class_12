<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link text-white">Calculator</a></li>
                <li><a href="" class="nav-link text-white">Series</a></li>
            </ul>
        </div>
    </nav>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center font-weight-bolder bg-dark text-white">My Calculator</div>
                        <div class="card-body">
                            <form action="action.php" method="post">

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" required name="first_number" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" required name="second_number" class="form-control"/>
                                    </div>
                                </div>
<!--                                *********Calculate with radio select******************   -->
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Select Action</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio"  name="operator" checked value="+" class=""/> Addition </label>
                                        <label for=""><input type="radio"  name="operator" value="-" class=""/> Subtraction </label>
                                        <label for=""><input type="radio"  name="operator" value="*" class=""/> Multiplication </label>
                                        <label for=""><input type="radio"  name="operator" value="/" class=""/> Division </label>
                                        <label for=""><input type="radio"  name="operator" value="%" class=""/> Reminder </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo isset($result) ? $result: ''; ?>" readonly class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-nd-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="Submit"/>
                                    </div>
                                </div>
<!--                              *****************  calculate using button*******************         -->
<!--                                <div class="form-group row">-->
<!--                                    <label for="" class="col-form-label col-md-3"></label>-->
<!--                                    <div class="col-md-9">-->
<!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="+"/>-->
<!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="-"/>-->
<!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="*"/>-->
<!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="/"/>-->
<!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="%"/>-->
<!--                                    </div>-->
<!--                                </div>-->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>