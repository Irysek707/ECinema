<title>ECinema | Snakcs & Drinks</title>

<?php

#Set page title and display header section
$page_title = 'Snakcs & Drinks';
include('includes/logout.php');

echo '<h1>Snacks</h1>
<div class="container">
<div class="card" style="width: 18rem;">
    <img src="img/snack01.jpg" class="card-img-top" alt="Snack 1">
    <div class="card-body">
          <h4 class="card-title">Popcorn</h4>
          Sweet or Salty<br/>
          £4.50-£6.50
    </div>
</div>
<div class="card" style="width: 18rem;">
    <img src="img/snack02.jpg" class="card-img-top" alt="Snack 2">
    <div class="card-body">
          <h4 class="card-title">M&M\'s</h4>
          Different types<br/>
          £2.50
    </div>
</div>
<div class="card" style="width: 18rem;">
    <img src="img/snack03.jpg" class="card-img-top" alt="Snack 3">
    <div class="card-body">
          <h4 class="card-title">Haribo</h4>
          Mix & Match<br/>
          £4.50
    </div>
</div>
</div>

<br/>
<h1>Drinks</h1>
<div class="container">
<div class="card" style="width: 18rem;">
    <img src="img/drink01.jpg" class="card-img-top" alt="Snack 1">
    <div class="card-body">
          <h4 class="card-title">Fizzy drinks</h4>
          Coca Cola, Fanta, Sprite<br/>
          £3.50
    </div>
</div>
<div class="card" style="width: 18rem;">
    <img src="img/drink02.jpg" class="card-img-top" alt="Snack 2">
    <div class="card-body">
          <h4 class="card-title">Juice</h4>
          Orange, Apple, Berry<br/>
          £3.00
    </div>
</div>
<div class="card" style="width: 18rem;">
    <img src="img/drink03.jpg" class="card-img-top" alt="Snack 3">
    <div class="card-body">
          <h4 class="card-title">Water</h4>
          Sparkling, Still<br/>
          £2.50
    </div>
</div>
</div><br/>';

#Display footer section
include('includes/footer.php');

?>