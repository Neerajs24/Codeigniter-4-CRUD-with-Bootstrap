<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
    <title>CodeIgniter 4 CRUD (Create, Read, Update and Delete) with Bootstrap and Datatables</title>
</head>
<body>
    <div class="container mt-4 ">
        <p><h1>CodeIgniter 4 CRUD (Create, Read, Update and Delete) with Bootstrap</h1></p>
        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success mb-2">ADD user</a>
        </div>

        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        }
        ?>

        <table class="table table-bordered table-striped" id="users-list">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($users): ?>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                        <a href="<?php echo base_url('edit-view/'.$user['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?php echo base_url('delete/'.$user['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <script>

    let table = new DataTable('#users-list');

    </script>
</body>
</html>