<?php
include('session.php');

if ($row['amt'] == 'user') {
    header('Location: vault.php');
    exit();
}
include_once 'config.php';

// Fetch the row to edit
$sql = "SELECT * FROM site WHERE id = 20";  // Fetch the specific row with id = 20
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$message = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $addr2 = $_POST['addr2'];
    $phone2 = $_POST['phone2'];
    $email2 = $_POST['email2'];
    $tawk = $_POST['tawk'];
    $year = $_POST['year'];
    $url = $_POST['url'];

    // Handle file upload (image)
    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $target_dir = "img/"; // Directory to store uploaded files
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    } else {
        $image = $row['image']; // If no new image is uploaded, keep the old one
    }


    // Handle file upload (image)
    if ($_FILES['image2']['name']) {
        $image2 = $_FILES['image2']['name'];
        $target_dir = "img/"; // Directory to store uploaded files
        $target_file = $target_dir . basename($image2);
        move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file);
    } else {
        $image2 = $row['image2']; // If no new image is uploaded, keep the old one
    }

    // Prepare the update query using a prepared statement
    $stmt = $conn->prepare("UPDATE site SET 
            name = ?, 
            addr = ?, 
            phone = ?, 
            email = ?, 
            addr2 = ?, 
            phone2 = ?, 
            email2 = ?, 
            tawk = ?, 
            year = ?, 
            url = ?,
            image = ?, 
            image2 = ? 
            WHERE id = ?");

    // Bind parameters to the statement
    $stmt->bind_param("ssssssssssssi", $name, $addr, $phone, $email, $addr2, $phone2, $email2, $tawk, $year, $url, $image, $image2, $row['id']);  // Use $row['id'] from the selected record

    // Execute the query
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Record updated successfully!</div>';
        header('Location: ' . $_SERVER['PHP_SELF']);
    } else {
        $message = '<div class="alert alert-danger">Error updating record: ' . $stmt->error . '</div>';
    }

    $stmt->close();  // Close the statement
}

$conn->close();  // Close the database connection
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="../images/favicon.png" rel="shortcut icon">
    <link type="text/css" href="edmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="edmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="edmin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="edmin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Welcome :
                    <i><?php echo $login_session; ?> </a>

                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                            <li><a href="identity.php"><i class="menu-icon icon-bullhorn"></i>Create New Tracking
                                </a>
                            </li>
                            <li><a href="settings.php"><i class="menu-icon icon-cog"></i>Site Settings
                                </a></li>
                            <li><a href="change_password.php"><i class="menu-icon icon-inbox"></i>Change Password
                                </a></li>
                            <li><a href="logout.php"><i class="menu-icon icon-tasks"></i>Logout </a></li>
                        </ul>
                        <!--/.widget-nav-->



                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">


                        <div class="module">
                            <div class="module-head">
                                <h3>Change Password</h3>
                            </div>
                            <div class="module-body">
                                <?= $message ?>

                                <form action="" class="form-horizontal row-fluid" method="post"
                                    enctype="multipart/form-data">

                                    <!-- Image Field -->

                                    <div class="control-group">
                                        <label class="control-label" for="image">Header logo</label>
                                        <div class="controls">
                                            <input type="file" name="image" id="image"
                                                onchange="previewImage(event)">

                                            <img src="img/<?= $row['image'] ?>" alt="Current Image" width="100">
                                            <img id="imagePreview" width="100">
                                        </div>
                                    </div>
                                    <div class="control-group">

                                    </div>
                                    <script>
                                        function previewImage(event) {
                                            const imagePreview = document.getElementById('imagePreview');
                                            const file = event.target.files[0];

                                            if (file) {
                                                const reader = new FileReader();

                                                reader.onload = function(e) {
                                                    imagePreview.src = e.target
                                                        .result; // Set the src of img tag to the result
                                                    imagePreview.style.display = 'block'; // Show the image
                                                }

                                                reader.readAsDataURL(file); // Read the file as a data URL
                                            } else {
                                                imagePreview.src = ''; // Clear the src if no file is selected
                                                imagePreview.style.display = 'none'; // Hide the image
                                            }
                                        }
                                    </script>

                                    <div class="control-group">
                                        <label class="control-label" for="image2">Footer logo</label>
                                        <div class="controls">
                                            <input type="file" name="image2" id="image2"
                                                onchange="previewImage2(event)">

                                            <img src="img/<?= $row['image2'] ?>" alt="Current Image" width="100">
                                            <img id="imagePreview2" width="100">
                                        </div>
                                    </div>
                                    <div class="control-group">

                                    </div>
                                    <script>
                                        function previewImage2(event) {
                                            const imagePreview2 = document.getElementById('imagePreview2');
                                            const file = event.target.files[0];

                                            if (file) {
                                                const reader = new FileReader();

                                                reader.onload = function(e) {
                                                    imagePreview2.src = e.target
                                                        .result; // Set the src of img tag to the result
                                                    imagePreview2.style.display = 'block'; // Show the image
                                                }

                                                reader.readAsDataURL(file); // Read the file as a data URL
                                            } else {
                                                imagePreview2.src = ''; // Clear the src if no file is selected
                                                imagePreview2.style.display = 'none'; // Hide the image
                                            }
                                        }
                                    </script>

                                    <!-- Name Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" value="<?= $row['name'] ?>" id="name"
                                                class="span8">
                                        </div>
                                    </div>

                                    <!-- Address Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Address</label>
                                        <div class="controls">
                                            <input type="text" name="addr" value="<?= $row['addr'] ?>" id="addr"
                                                class="span8">
                                        </div>
                                    </div>

                                    <!-- Phone Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Phone</label>
                                        <div class="controls">
                                            <input type="text" name="phone" value="<?= $row['phone'] ?>" id="phone"
                                                class="span8">
                                        </div>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Email</label>
                                        <div class="controls">
                                            <input type="email" name="email" value="<?= $row['email'] ?>" id="email"
                                                class="span8">
                                        </div>
                                    </div>

                                    <!-- Address Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Branch Address</label>
                                        <div class="controls">
                                            <input type="text" name="addr2" value="<?= $row['addr2'] ?>" id="addr2"
                                                class="span8">
                                        </div>
                                    </div>

                                    <!-- Phone Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Branch Phone</label>
                                        <div class="controls">
                                            <input type="text" name="phone2" value="<?= $row['phone2'] ?>"
                                                id="phone2" class="span8">
                                        </div>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Branch Email</label>
                                        <div class="controls">
                                            <input type="email" name="email2" value="<?= $row['email2'] ?>"
                                                id="email2" class="span8">
                                        </div>
                                    </div>

                                    <!-- Tawk.to Code Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Livechat Code</label>
                                        <div class="controls">
                                            <textarea rows="10" name="tawk" id="tawk"
                                                class="span8"><?= $row['tawk'] ?></textarea>
                                        </div>
                                    </div>

                                    <!-- Year Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Year</label>
                                        <div class="controls">
                                            <input type="text" name="year" value="<?= $row['year'] ?>" id="year"
                                                class="span8">
                                        </div>
                                    </div>

                                    <!-- URL Field -->
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">URL</label>
                                        <div class="controls">
                                            <input type="text" name="url" value="<?= $row['url'] ?>" id="url"
                                                class="span8">
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>



                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; <?php echo date("Y"); ?> Fisher Designs </b>All rights reserved.
        </div>
    </div>
    <script src="edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="edmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="edmin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="edmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="edmin/scripts/common.js" type="text/javascript"></script>

</body>