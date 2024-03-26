<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/sweetalert.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login</title>
<style>
.hed{
background: #ccc;
color: blue;
}
.hed h1{
padding-top: 20px;
padding-bottom: 25px;
}
.form{
margin-top: 50px;
background: #ccc;
}
.table{
margin-top: 50px;
}
</style>
</head>
<body class="stretched">
<div id="wrapper" class="clearfix">
<section id="page-title">
<div class="container clearfix hed">
<center>
</center>
</div>
</section>
<div class="col-md-12 hed">
<center>
<h1>Insert Data</h1>
</center>
</div>
<section id="content">
<div class="content-wrap">
<div class="container clearfix">
<div class="row">
<div class="col-md-12" id="hide">
<form class="row form" action="insert.php" method="post">
<?php include 'form.php'; ?>
<div class="col-12 form-group">
<input type="submit" class="btn btn-dark" name="submit" value="Insert">
</div>
</form>
</div>
<div class="col-md-12 p-0">
<table class="table table-dark">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Phone</th>
<th scope="col">Subject</th>
<th scope="col">Message</th>
<th scope="col">Created on</th>
<th scope="col">Update on</th>
<th scope="col" colspan="3">Action</th>
</tr>
</thead>
<tbody>
<?php
include 'database.php';
$b = new database();
$b->select("user","*");
$result = $b->sql;
?>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['created']; ?></td>
<td><?php echo $row['updated']; ?></td>
<td>
<a href="view.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-success btn-sm">View</a>
</td>
<td>
<a href="edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>
</td>
<td>
<a href="" type="button" data-toggle="modal" data-id="<?php echo $row['id']; ?>" data-target="#myModal" id="del" class="btn btn-danger btn-sm">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
</div>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(document).on('click',"#del",function(e) {
e.preventDefault();
var del = $(this).data('id');
swal({
title: "Are you sure?",
text: "Once deleted, you will not be able to recover this imaginary file!",
icon: "warning",
buttons: true,
dangerMode: true,
})

.then((willDelete) => {
if (willDelete) {
$.ajax({
url : "delete_data.php",
type : "POST",
data : {id:del},
success : function() {
swal({
title: "Sweet!",
text: "Delete data",
imageUrl: 'thumbs-up.jpg'
}).then(function(){
    window.location.href = "index.php";

});
}
});
swal("Poof! Your imaginary file has been deleted!", {
icon: "success",
});
} else {
swal("Your imaginary file is safe!");
}
});
});
});
</script>
</body>
</html>
