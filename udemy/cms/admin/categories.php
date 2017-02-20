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

                        <?php insertCategories(); ?>

                          <form action="" method="post">
                            <div class="form-group">
                            <label for="cat-title">Add Category</label>
                              <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add">
                            </div>
                          </form>

                          <?php

                          if (isset($_GET['edit'])) {

                            $cat_id = $_GET['edit'];

                            include "includes/update_categories.php";

                          }

                          ?>


                       </div>

                       <div class="col-xs-6">


                         <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Category Title</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php findAllCategories(); ?>
                            <?php deleteCategories(); ?>

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
