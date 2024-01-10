<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/chosesit.css" />
    <title> Booking</title>
    <link rel="shortcut icon" href="images/logo.jfif" />
  </head>
  <body>
    <div class="movie-container" style="margin-top: 20px;">
    	<?php require 'conection.php';

    $id=$_GET['name_id'];
    $sql = "SELECT * FROM film WHERE id='$id' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
      foreach($result as $row){
        $namefilm=$row['name'];
        echo '<button style="margin-top: 40px;" type="button" id="movie" value="10000" >'.$row['name'].'</p>
        ';
      }

    ?>
    </div>
    <input type="hidden" id="timeshow" value="<?php echo $_GET['timeshow']?>" >
    <input type="hidden" id="name_move" value="<?php echo $namefilm; ?>" >
    <input type="hidden" id="hool" value="<?php echo $_GET['day']?>" >

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat select "></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat "></div>
        <div class="seat "></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat "></div>
        <div class="seat "></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seat for a price of IQD.
      <span id="total" >0</span>
    </p>
  
    <br>
    <br>
    <button class="btn"onclick="generate()">booking</button>
    <br>

    <div id="imgbox">
      <!-- <a href=""></a> -->
      <!-- <a  id="qrhref" download="booking"> -->
      <img src="" id="qrimage" >
      
    </div>
    <br>
    <br>
    <br>

<hr>       
<script>

const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");
const imgbox = document.getElementById("imgbox");
const qrimage = document.getElementById("qrimage");
const qrhref = document.getElementById("qrhref");
const timeshow = document.getElementById("timeshow");
const name_move = document.getElementById("name_move");
const hool = document.getElementById("hool");



populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}

// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;

  setMovieData(movieSelect.selectedIndex, movieSelect.value);
}


// Get data from localstorage and populate UI
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        console.log(seat.classList.add("selected"));
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
    console.log(selectedMovieIndex)
  }
}
console.log(populateUI())
// Movie select event
movieSelect.addEventListener("change", (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});
// Seat click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");
    e.target.classList.toggle("sel");
  
    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
var elements = document.querySelectorAll(".selected");
for (var i = 0; i < elements.length; i++) {
  elements[i].classList.add("sold");
  elements[i].classList.remove("selected");
  updateSelectedCount();
}
var elements = document.querySelectorAll(".sold");
for (var i = 0; i < elements.length; i++) {
  elements[i].classList.add("sold");
  updateSelectedCount();
}
function generate(){
  
  qrimage.src=" https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=name move : " +name_move.value+" price :"  +total.innerHTML+"  sits :"+count.innerHTML+'   time :'+timeshow.value+'   day :'+hool.value;

  var elements = document.querySelectorAll(".selected");

  for (var i = 0; i < elements.length; i++) {
    elements[i].classList.add("sold");

    updateSelectedCount();

  }

    
}
</script>
 <script src="js/chosesit.js"></script>

<script src="js/qrcode.min.js" ></script>

  </body>
</html>