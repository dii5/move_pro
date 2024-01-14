
// const container = document.querySelector(".container");
// const seats = document.querySelectorAll(".row .seat:not(.sold)");
// const count = document.getElementById("count");
// const total = document.getElementById("total");
// const movieSelect = document.getElementById("movie");
// const imgbox = document.getElementById("imgbox");
// const qrimage = document.getElementById("qrimage");
// const qrhref = document.getElementById("qrhref");
// const timeshow = document.getElementById("timeshow");
// const name_move = document.getElementById("name_move");
// const hool = document.getElementById("hool");



// populateUI();

// let ticketPrice = +movieSelect.value;

// // Save selected movie index and price
// function setMovieData(movieIndex, moviePrice) {
//   localStorage.setItem("selectedMovieIndex", movieIndex);
//   localStorage.setItem("selectedMoviePrice", moviePrice);
// }

// // Update total and count
// function updateSelectedCount() {
//   const selectedSeats = document.querySelectorAll(".row .seat.selected");

//   const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

//   localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

//   const selectedSeatsCount = selectedSeats.length;

//   count.innerText = selectedSeatsCount;
//   total.innerText = selectedSeatsCount * ticketPrice;

//   setMovieData(movieSelect.selectedIndex, movieSelect.value);
// }


// // Get data from localstorage and populate UI
// function populateUI() {
//   const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

//   if (selectedSeats !== null && selectedSeats.length > 0) {
//     seats.forEach((seat, index) => {
//       if (selectedSeats.indexOf(index) > -1) {
//         console.log(seat.classList.add("selected"));
//       }
//     });
//   }

//   const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

//   if (selectedMovieIndex !== null) {
//     movieSelect.selectedIndex = selectedMovieIndex;
//     console.log(selectedMovieIndex)
//   }
// }
// console.log(populateUI())
// // Movie select event
// movieSelect.addEventListener("change", (e) => {
//   ticketPrice = +e.target.value;
//   setMovieData(e.target.selectedIndex, e.target.value);
//   updateSelectedCount();
// });
// var i=0;
// // Seat click event
// container.addEventListener("click", (e) => {
//   if (
//     e.target.classList.contains("seat") &&
//     !e.target.classList.contains("sold")
//   ) {
//     e.target.classList.toggle("selected");
  
//     updateSelectedCount();
//   }
// });

// // Initial count and total set
// updateSelectedCount();

// function generate(){
//   new QRCode(document.getElementById("qrcode-container"), '" +name_move.value+" price :"  +total.innerHTML+"  sits :"+count.innerHTML+   time :'+timeshow.value+'   day :'+day.value);

//   // qrimage.src=" https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=name move : " +name_move.value+" price :"  +total.innerHTML+"  sits :"+count.innerHTML+'   time :'+timeshow.value+'   hool :'+hool.value;

//   var elements = document.querySelectorAll(".selected");

//   for (var i = 0; i < elements.length; i++) {
//     elements[i].classList.add("sold");
//   }

    
// }