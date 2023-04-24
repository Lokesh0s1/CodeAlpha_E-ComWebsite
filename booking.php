<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Best Online Food Site | MyFoodhub.com</title>
  <link rel="stylesheet" href="./css/loki.css">
  <link rel="stylesheet" href="./css/about.css">
  
</head>

<body>
<nav id="navbar">
    <div id="logo">
      <img src="https://media.tenor.com/ba7gafSyuEAAAAAd/tasty-hills-my-tona.gif" alt="MyFoodhub.com">
    </div>
    <ul>
      <li class="item"><a href="./index.php">Home</a></li>
      <li class="item"> <a href="./index.php">Services</a></li>
      <li class="item"><a href="./about.html">About Us</a></li>
      <li class="item"><a href="./index.php">Contact Us</a> </li>
      <li class="item"><a href="./booking.php">Book Table</a> </li>
      <li class="item"><a href="./car.html"><button type="button" class="bnt">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3"
              viewBox="0 0 16 16">
              <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
              </path>
            </svg>
            Cart
          </button>
        </a>
        </li>
    </ul>
  </nav>
  <section id="form" data-aos="fade-up">
    <div class="container">
      <h3 class="form__title">Book Table</h3>
      <div class="form__wrapper">
        <form action="book.php" method="POST" netlify>
          <div class="form__group">
            <label for="Name">Name <br> </label>
            <input type="text" id="Name" name="name" required>
          </div>
          <div class="form__group">
            <label for="contact">Contact No. <br> </label>
            <input type="text" id="contact" name="contact" required>
          </div>
          <div class="form__group">
            <label for="email">Email <br> </label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form__group">
            <label for="tableType">Table Type <br></label>
        <select name="tt" id="tt" required>
          <option selected disabled>Choose</option>
          <option value="small">Small(2 persons)</option>
          <option value="medium">Medium(4 persons)</option>
          <option value="large">Large(6 persons)</option>
        </select>
          </div>
          <div class="form__group">
            <label for="guestNumber">Guest Number <br></label>
            <input type="number" id="gn" name="number" min="1" max="10" required>
          </div>
          <div class="form__group">
            <label for="placement">Placement <br></label>
            <select name="placement" id="placement">
              <option selected disabled>Choose</option>
              <option value="outdoor">Outdoor</option>
              <option value="indoor">Indoor</option>
              <option value="rooftop">rooftop</option>
            </select>
          </div>
          <div class="form__group">
            <label for="date">Date <br></label>
            <input type="date" id="date" name="date" required>
          </div>
          <div class="form__group form__group__full">
            <label for="note">Note <br></label>
            <textarea name="note" id="note" rows="4"></textarea>
          </div>
          <button type="submit" class="btn primary-btn">Book Table</button>
        </form>
      </div>
    </div>
  </section>
<script src="index.js"></script>
</body>
</html>