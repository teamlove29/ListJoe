<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ชื่อเว็ป -->
    <title>ตรวจเช็คคนโกง</title>


    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/style.css">
   
</head>

<body ng-controller='pageCtrl'>



    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-color">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto p-3" id="myTab">
                    <li class="nav-item ">
                            <a class="nav-link " href="#!/" >หน้าแรก
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#!/report">แจ้งคนโกง</a>
                    </li>
                    <li class="nav-item-3">
                        <a class="nav-link" href="#!/help">โดนโกงทำอย่างไร?</a>
                    </li>
                    <li class="nav-item  ml-2">
                        <button class="btn btn-sm btn-outline-secondary" type="button">
                            <a class="nav-link" href="#!/donate">
                                <i class="fas fa-donate"></i> บริจาคเพื่อเป็นกำลังใจ</a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- main page -->
    <div ng-view >  
    </div>

<!-- footer -->

    <footer class="text-center mt-5">

        <span>จัดทำเพื่อรวบรวมรายชื่อคนโกงทั่วประเทศไทย โดยทีมงาน</span>
        <a href="index.php" target="_blank">Minimal.com</a>
    </footer>



    <!-- import angularjs -->
    <script src="./node_modules/angular/angular.min.js"></script>
    <script src="./node_modules/angular-route/angular-route.min.js"></script>

    <!-- jquery -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <!-- framwork -->
    <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- import js -->
    <script src="./controller/app.js"></script>
    <script src="./controller/homeCtrl.js"></script>
    <script src="./controller/donateCtrl.js"></script>
    <script src="./controller/helpCtrl.js"></script>
    <script src="./controller/reportCtrl.js"></script>

</body>
</html>

