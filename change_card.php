<?php
# Access session.
session_start();

# Redirect if not logged in.
if (!isset($_SESSION['user_id'])) {
  require('login_tools.php');
  load();
}

# Check form submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  # Connect to the database.
  require('includes/connect_db.php');
  # Initialize an error array.
  $errors = array();

  # xxx
  if (empty($_POST['card_number'])) {
    $errors[] = 'Enter account number printed on card';
  } else {
    $card_number = mysqli_real_escape_string($link, trim($_POST['card_number']));
  }


  if (empty($_POST['exp_month'])) {
    $errors[] = 'Enter expiry date printed on card';
  } else {
    $exp_m = mysqli_real_escape_string($link, trim($_POST['exp_month']));
  }

  if (empty($_POST['exp_year'])) {
    $errors[] = 'Enter expiry date printed on card';
  } else {
    $exp_y = mysqli_real_escape_string($link, trim($_POST['exp_year']));
  }

  if (empty($_POST['cvv'])) {
    $errors[] = 'Enter security code printed on back of card';
  } else {
    $cvv = mysqli_real_escape_string($link, trim($_POST['cvv']));
  }

  # On success new card details into 'users' database table.
  if (empty($errors)) {
    $q = "UPDATE users SET card_number='$card_number', exp_month='$exp_m', exp_year='$exp_y', cvv='$cvv' WHERE user_id={$_SESSION[user_id]}";
    $r = @mysqli_query($link, $q);
    if ($r) {
      header("Location: user.php");
    } else {
      echo "Error deleting record: " . $link->error;
    }
  }

  # Or report errors.
  else {
    echo ' <div class="container"><div class="alert alert-dark alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h1><strong>Error!</strong></h1><p>The following error(s) occurred:<br>';
    foreach ($errors as $msg) {
      echo " - $msg<br>";
    }
    echo 'Please try again.</div></div>';
    # Close database connection.
    mysqli_close($link);
  }
}
?>