<title>ECinema | Coming Soon</title>

<?php #DISPLAY COMPLETE LOGGED IN PAGE
#Access session
session_start();

#Redirect if not logged in.
if (!isset($_SESSION['user_id'])) {
  require('login_tools.php');
  load();
}

#Set page title and display header section
$page_title = 'Coming soon';
include('includes/logout.php');

#Open database connection
require('includes/connect_db.php');

#Retrive movies from 'movie' table
$q = "SELECT * FROM coming";
$r = mysqli_query($link, $q);

echo '<h1>Coming soon</h1>
<div class="container">';
if (mysqli_num_rows($r) > 0) {
  # Display body section.
  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo '<div class="card" style="width: 18rem;">
            <img src="' . $row['img'] . '" class="card-img-top" alt="Movie">
            <div class="card-body">
              <h4 class="card-title">' . $row['movie_title'] . '</h4>
            </div>
          </div>';
  }

  # Close database connection.
  mysqli_close($link);

}
# Or display message.
else {
  echo '<p>There are currently no movies in coming soon category.</p>';
}
echo '</div>';



#Display footer section
include('includes/footer.php');
?>