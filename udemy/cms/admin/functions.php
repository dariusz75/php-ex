<?php

function insertCategories() {

	global $connection;

	if (isset($_POST['submit'])) {

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
}



function findAllCategories() {

	global $connection;

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

}


function deleteCategories() {

	global $connection;

	if (isset($_GET['delete'])) {

    $cat_to_delete_id = $_GET['delete'];
    $cat_to_delete_query = " DELETE FROM categories WHERE cat_id = {$cat_to_delete_id} ";
    $delete_query = mysqli_query($connection, $cat_to_delete_query);
    header("Location: categories.php");

  }

}

?>