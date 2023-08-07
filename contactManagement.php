<?php
$insert = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "contactmanagementdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry failed to connect" . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];

    $sql = "INSERT INTO `contactmanager` (`name`, `phonenumber`) VALUES ('$name', '$number')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $insert = true;
    }else {
        echo "Data can not insert successfully beacuse " . mysqli_error($conn);
    }
    
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourContacts</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- External css -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ContactManager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="/ContactManagementSystemProject/contactManagement.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Inputs -->
    <div class="container" style="padding-left: 440px; padding-top: 49px; display: inline-flex;">
        <form action="/ContactManagementSystemProject/contactManagement.php" method="post"
            style="display: inline-flex;">
            <div class="cont">
                <input required="" type="text" name="name" class="input" id="name">
                <label for="name" class="label">Username</label>
            </div>
            <div class="cont" style="margin-left: 42px;">
                <input required="" type="number" name="number" class="input" id="number">
                <label for="number" class="label">Phone Number</label>
            </div>
            <button type="submit" class="button" style="margin-left: 32px;">
                Submit
            </button>
        </form>
    </div>



    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>