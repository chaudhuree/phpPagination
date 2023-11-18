<?php
include 'script.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php mysqli pagination</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="content">
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
      <p><?php echo $row['id'] . ' - ' . $row["product_name"] ?></p>
    <?php
    }
    ?>
  </div>
  <!-- Display the page info text -->
  <div class="page-info">
    <?php
    if (!isset($_GET['page-no'])) {
      $page = 1;
    } else {
      $page = $_GET['page-no'];
    }
    ?>
    Showing <?php echo $page ?> of <?php echo $pages ?> Pages

  </div>

  <!-- Display the pagination button -->
  <div class="pagination">
    <!-- go to the first page -->
    <a href="?page-no=1">First</a>
    <!-- go to the previous page -->
    <?php

    if (isset($_GET['page-no']) && $_GET['page-no'] > 1) {
    ?>
      <a href="?page-no=<?php echo $_GET['page-no'] - 1 ?>">Previous</a>
    <?php
    } else {
    ?>
      <a disabled class="disabled-page">Previous</a>
    <?php
    }
    ?>
    <!-- output the page numbers -->
    <div class="page-numbers">
      <?php
      for ($counter = 1; $counter <= $pages; $counter++) {
      ?>
        <a href="?page-no=<?php echo $counter ?>"><?php echo $counter ?></a>
      <?php
      }
      ?>
    </div>

    <!-- go to next page -->
    <?php
    if (isset($_GET['page-no']) && $_GET['page-no'] < $pages) {
    ?>
      <a href="?page-no=<?php echo $_GET['page-no'] + 1 ?>">Next</a>
    <?php
    } else {
    ?>
      <a class="disabled-page" disabled>Next</a>
    <?php
    }
    ?>


    <!-- go to the last page -->
    <a href="?page-no=<?php echo $pages ?>">Last</a>
  </div>

</body>

</html>