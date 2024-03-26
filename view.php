<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/jquery.min.js"></script>
<title>Show</title>
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
        <h1>View Data</h1>
    </center>
</div>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12 p-0">
                    <table class="table table-dark">
                        <?php
                        include 'database.php';
                        $id = $_GET['id'];
                        $b = new database();
                        $b->select("user", "*", "id='$id'");
                        $result = $b->sql;
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td><?php echo $row['id']; ?></td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['name']; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?php echo $row['phone']; ?></td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td><?php echo $row['subject']; ?></td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td><?php echo $row['message']; ?></td>
                            </tr>
                            <tr>
                                <th>Created Time &amp; Date</th>
                                <td><?php echo $row['created']; ?></td>
                            </tr>
                            <tr>
                                <th>Updated Time &amp; Date</th>
                                <td><?php echo $row['updated']; ?></td>
                            </tr>
                            <tr>
                                <th>Back To Home</th>
                                <td><a href="index.php" type="button" class="btn btn-primary">Back</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
