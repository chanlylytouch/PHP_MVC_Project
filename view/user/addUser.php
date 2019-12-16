<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form action="index2.php?action=add_users" method="post">
                        <div class="form-group">
                            <label>User Name:</label>
                            <input type="text" name="userName" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label><br>
                            <input type="radio" name="gender" value="Male">Male<br> 
                            <input type="radio" name="gender" value="Female">Female
                        </div>
                        <div class="form-group">
                            <label>Age:</label>
                            <input type="number" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Height:</label>
                            <input type="number" name="height" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Role:</label>
                            <select class="form-control" name="role">
                                <option>WEP-2020A</option>
                                <option>WEP-2020B</option>
                                <option>SNA-2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Club Id:</label>
                            <input type="number" name="club" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description:</label><br>
                            <input type="text" id="description" name="description" class="form-control">
                        </div>
                        <a href="index2.php?action=viewUser" class="btn btn-success" id="back">Go Back</a>
                        <input type="submit" class="btn btn-primary float-right" value="Submit" name="add">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>