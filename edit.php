<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <title>Edit</title>
    <style>
        .hed {
            background: #ccc;
            color: blue;
        }

        .hed h1 {
            padding-top: 20px;
            padding-bottom: 25px;
        }

        .form {
            margin-top: 50px;
            background: #ccc;
        }

        .table {
            margin-top: 50px;
        }
    </style>
</head>
<body class="stretched">
<div class="col-md-12 hed">
    <center>
        <h1>Edit Data</h1>
    </center>
</div>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <?php
                include 'database.php';
                $id = $_GET['id'];
                $b = new database();
                $b->select("user", "*", "id='$id'");
                $result = $b->sql;
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="col-md-12" id="hide">
                    <form class="row form" action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <?php include 'form.php'; ?>
                        <div class="col-12 form-group">
                            <input type="submit" class="btn btn-dark" name="submit" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
