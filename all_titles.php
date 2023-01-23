<title>ECinema | Movies</title>

<?php

#Set page title and display header section
$page_title = 'Home';
include('includes/logout.php');

echo '<h1>All titles</h1><br/>';

#Open database connection
require('includes/connect_db.php');

#Retrive movies from 'movie' table
$q = "SELECT * FROM movie";
$r = mysqli_query($link, $q);

echo '<div class="container">';
if (mysqli_num_rows($r) > 0) {
    # Display body section.
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src=' . $row['preview'] . ' 
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
           </div>
        </div>
        <div class="col-sm-12 col-md-4"><h6 class="display-4">' . $row['movie_title'] . '</h6>
            <p>' . $row['further_info'] . '</p><center><br/><a href="movie.php?id=' . $row['id'] . '" class="btn btn-secondary">Book Now</a>
            <a href="mov-rev.php?movie_title=' . $row['movie_title'] . '">
				  <span class="btn btn-secondary">Review</span></a></center>
              </div></div><br/>';
    }

    # Close database connection.
    mysqli_close($link);

}
# Or display message.
else {
    echo '<p>There are currently no movies showing.</p>';
}


#Open database connection
require('includes/connect_db.php');

$q = "SELECT * FROM coming";
$r = mysqli_query($link, $q);
if (mysqli_num_rows($r) > 0) {
  # Display body section.
  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo '<div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src=' . $row['preview'] . ' 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
       </div>
    </div>
    <div class="col-sm-12 col-md-4"><h6 class="display-4">' . $row['movie_title'] . '</h6>
        <p>' . $row['further_info'] . '</p><center><h5>Coming Soon</h5></center>
          </div></div><br/>';
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

echo '<br/>'

    ?>