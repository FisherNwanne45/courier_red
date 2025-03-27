<?php
include('session.php');

if ($row['amt'] == 'user') {
    header('Location: vault.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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

                            <li><a href="users.php"><i class="menu-icon icon-user"></i>Vault Users </a>
                            </li>
                            <li><a href="create_user.php"><i class="menu-icon icon-user"></i>Create New Vault User
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
                        <div class="btn-controls">
                            <div class="btn-box-row row-fluid">
                                <a href="parcel.php" class="btn-box big span4"><i
                                        class=" icon-random"></i><b>Tracking</b>
                                    <p class="text-muted">
                                        View All Parcels</p>
                                </a><a href="users.php" class="btn-box big span4"><i
                                        class="icon-user"></i><b>Vault</b>
                                    <p class="text-muted">
                                        View All Users</p>
                                </a><a href="logout.php" class="btn-box big span4"><i
                                        class="icon-cog"></i><b>Logout</b>
                                    <p class="text-muted">
                                        Back to site</p>
                                </a>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h2>
                                        View All Parcels</h2> <a align="right" class="btn btn-small btn-primary"
                                        href="identity.php">
                                        <i class="icon-edit"> Create New Tracking</i>

                                    </a>
                                </div>
                                <?php if (isset($_SESSION['Success'])) { ?>
                                    <h2><?php echo $_SESSION['Success']; ?></h2>
                                <?php session_unset();
                                } ?>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                        class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Edit
                                                </th>
                                                <th>
                                                    Track No.
                                                </th>
                                                <th>
                                                    Image
                                                </th>
                                                <th>
                                                    Sender
                                                </th>
                                                <th>
                                                    Receiver
                                                </th>


                                                <th>
                                                    Status
                                                </th>

                                                <th>
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>

                                        <?php
                                        include('config.php');
                                        $result = $conn->query("SELECT * FROM user ORDER by id DESC");
                                        if (!$result->num_rows > 0) {
                                            echo '<h2 style="text-align:center;">No Data Found</h2>';
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                        ?>


                                            <tbody>
                                                <tr class="gradeU">
                                                    <td class="center">
                                                        <a class="btn btn-small btn-primary"
                                                            href="edit.php?id=<?php echo $row['id']; ?>">
                                                            <i class="icon-edit"> Edit</i>

                                                        </a>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['cid']; ?>
                                                    </td>
                                                    <td>
                                                        <img src="img/<?php echo $row['image']; ?>" width="50px"
                                                            height="50px">
                                                    </td>
                                                    <td>
                                                        <?php echo $row['remark']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['name']; ?>
                                                    </td>


                                                    <td class="center">
                                                        <?php echo $row['rmk']; ?>
                                                    </td>

                                                    <td class="center">
                                                        <a class="btn btn-small btn-danger"
                                                            onclick="return confirm('Are you sure?')"
                                                            href="delete.php?id=<?php echo $row['id']; ?>">
                                                            <i class="icon-key"> Delete</i>

                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody><?php } ?>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Edit
                                                </th>
                                                <th>
                                                    Track No.
                                                </th>
                                                <th>
                                                    Image
                                                </th>
                                                <th>
                                                    Sender
                                                </th>
                                                <th>
                                                    Receiver
                                                </th>

                                                <th>
                                                    Status
                                                </th>

                                                <th>
                                                    Delete
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->


                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
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

        <script src="edmin/scripts/common.js" type="text/javascript"></script>

</body>