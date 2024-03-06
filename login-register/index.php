<?php 
    include 'inc/header.php'; 
    include 'library/user.php';
    $user = new User();
?>
  <!-- Navbar -->

  <div class="panel panel-default">

<div class="panel-heading">
    <h2>User List <span class="justify-content-end"> <strong>Welcome</strong> Dilder</span> </h2>
</div>

<div class="panel-body">
    <table class="table table-striped">
        <th width="20%">SL</th>
        <th width="20%">Name</th>
        <th width="20%">Username</th>
        <th width="20%">Email Address</th>
        <th width="20%">Action</th>

        <tr>
            <td>1</td>
            <td>Dilder</td>
            <td>dilder</td>
            <td>dilder.hossain.feni@gmail.com</td>
            <td><a class="btn btn-primary" href="profile.php">View</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Dilder</td>
            <td>dilder</td>
            <td>dilder.hossain.feni@gmail.com</td>
            <td><a class="btn btn-primary" href="profile.php">View</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Dilder</td>
            <td>dilder</td>
            <td>dilder.hossain.feni@gmail.com</td>
            <td><a class="btn btn-primary" href="profile.php">View</a></td>
        </tr>

    </table>

</div>

</div>


<?php 
include 'inc/footer.php';
?>