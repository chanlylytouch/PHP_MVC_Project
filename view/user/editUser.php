<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-center text-white">Edit Member Information Form</h3>
                </div>
                <div class="card-body">
                <?php
                    if (isset($data['club'])) {
                        foreach ($data['club'] as $result) {
                ?>
                    <form action="index2.php?action=edit_data&id=<?php echo $result['userID']; ?>" method="post">
                        <div class="form-group">
                            <label>User Name:</label>
                            <input type="text" name="userName" class="form-control" placeholder="Username" value="<?php echo $result['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="radio">Gender:</label><br>
                            <?php
                                if($result['gender'] == "Male"){
                           ?>
                            <input type="radio" checked="checked" name="gender" value="Male" >Male <br>
                            <input type="radio" name="gender" value="Female" >Female
                            <?php
                                }else{
                            ?>
                            <input type="radio" name="gender" value="Male" >Male <br>
                            <input type="radio" name="gender" value="Female" checked="checked">Female
                            <?php
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Age:</label>
                            <input type="number" name="age" class="form-control" value="<?php echo $result['age']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Height:</label>
                            <input type="number" name="height" class="form-control" value="<?php echo $result['height']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Role:</label>
                            <select class="form-control" name="role" value="<?php echo $result['role']; ?>">
                                <?php 
                                    if($result['role'] == "WEP-2020A"){
                                ?>
                                <option selected = "selected">WEP-2020A</option>
                                <option>WEP-2020B</option>
                                <option>SNA-2020</option>
                                <?php 
                                    }else if($result['role'] == "WEP-2020B"){
                                ?>
                                <option>WEP-2020A</option>
                                <option selected = "selected">WEP-2020B</option>
                                <option>SNA-2020</option>
                                <?php 
                                    }else{
                                ?>
                                <option>WEP-2020A</option>
                                <option>WEP-2020B</option>
                                <option  selected = "selected" >SNA-2020</option>
                                <?php 
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $result['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $result['address']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Description:</label><br>
                            <input type="text" id="description" class="form-control" name="description" value="<?php echo $result['description'];?>">
                        </div>
                        <a href="index2.php?action=viewUser" class="btn btn-success"  id="back">Go Back</a>
                        <button type="submit" class="btn btn-primary float-right" name="edit" value="Edit">Edit</button>
                </div>
                
                </form>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>