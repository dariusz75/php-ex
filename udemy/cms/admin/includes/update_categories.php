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


    <?php

    // UPDATE query
    if (isset($_POST['update_category'])) {

      $the_cat_title = $_POST['cat_title'];
      $cat_to_update_query = " UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} ";
      $update_query = mysqli_query($connection, $cat_to_update_query);

      if ($update_query) {
        echo "Category updated.";
      }

    }

    ?>

      
    </div>
    <div class="form-group">
      <input class="btn btn-primary" type="submit" name="update_category" value="Update">
    </div>
  </form>