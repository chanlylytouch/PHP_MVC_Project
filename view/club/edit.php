<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card example z-depth-5">
                    <div class="card-header text-center bg-primary text-light">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                    <?php
                    if (isset($data['club_data'])) {
                        foreach ($data['club_data'] as $result) {
                            ?>
                        <form action="index.php?action=edit_data&id=<?php echo $result['clubID']; ?>" method="POST">
                            <div class="form-group">
                                <label for="name"><strong>Username:</strong></label>
                                <input type="text" class="form-control" name="user" value="<?php echo $result['usernamae']?>" >
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Gender:</strong></label><br>
                                <input type="radio" value="Male" <?php if ($result['gender'] == 'Male') { ?> checked="checked" <?php } ?> name="gender">Male
                                <input type="radio" value="Female" <?php if ($result['gender'] == 'Female') { ?> checked="checked" <?php } ?> name="gender">Female
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Age:</strong></label>
                                <input type="text" class="form-control" name="age" value="<?php echo $result['age']?>" >
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Email:</strong></label>
                                <input type="email" class="form-control" name="email" value="<?php echo $result['email']?>" >
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Name of club:</strong></label>
                                <input type="text" class="form-control" name="clubName" value="<?php echo $result['clubName']?>" >
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Desciption:</strong></label>
                                <input type="text" class="form-control" name="description" value="<?php echo $result['description']?>" >
                            </div>
                            <input type="submit" name="edit" class="btn btn-primary float-right" value="Create">
                            <a href="index.php?action=edit" class="btn btn-success">Go Back</a>
                        </form>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>