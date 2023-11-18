<?php
include 'script.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php mysqli pagination</title>
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
</body>

</html>