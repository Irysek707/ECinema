<?php #DISPLAY COMPLETE LOGGED IN PAGE
#Access session
session_start();

#Redirect if not logged in.
if (!isset($_SESSION['user_id'])) {
  require('login_tools.php');
  load();
}

#Open database connection
require('includes/connect_db.php');

#Retrive movies from 'movie' table
$q = "SELECT * FROM movie";
$r = mysqli_query($link, $q);

echo '<div class="container">';
if (mysqli_num_rows($r) > 0) {
  # Display body section.
  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo '<div class="card" style="width: 18rem;">
            <img src="' . $row['img'] . '" class="card-img-top" alt="Movie">
            <div class="card-body">
              <h4 class="card-title">' . $row['movie_title'] . '</h4>
              <a href="movie.php?id=' . $row['id'] . '" class="btn btn-secondary">Book Now</a>
            </div>
          </div>';
  }

  # Close database connection.
  mysqli_close($link);

}
# Or display message.
else {
  echo '<p>There are currently no movies showing.</p>';
}
echo '</div>';

?>