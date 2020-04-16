<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD App - Midterm Exam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>CRUD app</h1>
        <div class="card">

            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i>
                <strong>Add User</strong>
                <a href="index.html" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a>
            </div>

            <div class="card-body">
                <div class="col-sm-6">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                    <form method="post">
                        <div class="form-group">
                            <label>User Name <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required="">
                        </div>

                        <div class="form-group">
                            <label>User Email <span class="text-danger">*</span></label>
                            <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter user email" required="">
                        </div>

                        <div class="form-group">
                            <label>User Phone <span class="text-danger">*</span></label>
                            <input type="tel" pattern=".{14,14}" title="Accept US Number format (888) 888-8888" class="tel form-control" name="userphone" id="userphone" x-autocompletetype="tel" placeholder="Enter user phone" required="">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>