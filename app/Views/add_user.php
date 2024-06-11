<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- <style>
        .error{
            display:block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style> -->

    <title>CodeIgniter 4 CRUD (Create, Read, Update and Delete) with Bootstrap and Datatables</title>
</head>

<body>
    <div class="container mt-4 ">
        <p>
        <h1>CodeIgniter 4 CRUD (Create, Read, Update and Delete) with Bootstrap</h1>
        </p>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group"><br />
                        <button type="submit" class="btn btn-primary btn-block">Submit Data</button>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script> -->

    <!-- <script>
        if($("#add_create"). length > 0){
            $("#add_create"). validate({
                rules: {
                    required: true,
                },
                email: {
                    required: true,
                    maxlength: 60,
                    email: true,
                },
                messages: {
                    name: {
                        required: "Name is required.",
                    },
                    email: {
                        required: "email  is required.",
                        email: "it does  not seem to be a valid email.",
                        maxlength: "The email should be or equal to 60 chars.",
                    },
                },
            })
        }
    </script> -->
</body>

</html>