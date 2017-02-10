<?php include "includes/admin_header.php" ?>

<body>

    <div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Admin Panel
                            <small>Author name</small>
                        </h1>

                        <div class="col-xs-6">

                        <?php

                          if(isset($_POST['submit'])) {

                            $cat_title = $_POST['cat_title'];

                            if ($cat_title == "" || empty($cat_title)) {

                                echo "Please fill this field";

                            } else {

                              $query = " INSERT INTO categories(cat_title) ";
                              $query .= " VALUE('{$cat_title}') ";

                              $create_category_query = mysqli_query($connection, $query);

                              if (!$create_category_query) {
                                die( "No connection!" . mysqli_error($connection));
                              } 

                            }

                          }

                        ?>



                          <form action="" method="post">
                            <div class="form-group">
                            <label for="cat-title">Add Category</label>
                              <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add">
                            </div>
                          </form>


                          <form action="" method="post">
                            <div class="form-group">
                            <label for="cat-title">Update Category</label>

                            <?php

                            if (isset($_GET['edit'])) {
                              $cat_id = $_GET['edit'];

                              $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                              $select_categories_for_editing = mysqli_query($connection, $query);

                              while($row = mysqli_fetch_assoc($select_categories_for_editing)) {

                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];

                            ?>

                            <input class="form-control" type="text" name="cat_title" value="<?php if(isset($cat_title)) { echo $cat_title; } ?>">

                            <?php

                              }
                            }

                                ?>

                              
                            </div>
                            <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Update">
                            </div>
                          </form>

                       </div>

                       <div class="col-xs-6">


                         <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Category Title</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                              $query = "SELECT * FROM categories";
                              $select_categories = mysqli_query($connection, $query);

                              while($row = mysqli_fetch_assoc($select_categories)) {

                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];

                                echo "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "<td><a href='categories.php?delete=$cat_id'>Delete</a></td>";
                                echo "<td><a href='categories.php?edit=$cat_id'>Edit</a></td>";
                                echo "</tr>";

                              } 

                            ?>

                            <?php

                            if (isset($_GET['delete'])) {

                              $cat_to_delete_id = $_GET['delete'];
                              $cat_to_delete_query = " DELETE FROM categories WHERE cat_id = {$cat_to_delete_id} ";
                              $delete_query = mysqli_query($connection, $cat_to_delete_query);
                              header("Location: categories.php");

                            }

                            ?>

                            </tr>
                          </tbody>

                          

                        </table>

                       </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
