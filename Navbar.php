<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="assets/Navbar.css">
  <link rel="icon" type="image/png" href="assets/Icon.png">
</head>
<body>
<div class="nav">
  <p>PhotoBooth</p>
  <div class="button-wrap">
    <button class="btn active dashboard" onclick="window.location.href='Dashboard.php';">
      <div class="icon">
        <ion-icon name="aperture-outline"></ion-icon>
      </div>
    </button>
  </div>
  <div class="button-wrap">
    <button class="btn active home" onclick="window.location.href='Homepage.php';">
      <div class="icon">
        <ion-icon name="home-outline"></ion-icon>
      </div>
    </button>
  </div>
  <div class="button-wrap">
    <button class="btn active upload" onclick="window.location.href='Upload.php';">
      <div class="icon">
        <ion-icon name="cloud-upload-outline"></ion-icon>
      </div>
    </button>
  </div>
  <div class="button-wrap">
    <button class="btn active profile" onclick="window.location.href='User.php';">
      <div class="icon">
        <ion-icon name="person-outline"></ion-icon>
      </div>
    </button>
  </div>
  <div class="button-wrap">
    <button class="btn active logout" onclick="window.location.href='Login.php';">
      <div class="icon">
        <ion-icon name="exit-outline"></ion-icon>
      </div>
    </button>
  </div>
</div>
<script>
  let buttonitems = document.querySelectorAll(".btn");
  let activeButton = document.querySelector(".btn.active");
  let activetext = document.querySelector(".section.active");

  buttonitems.forEach((item) => {
    const text = document.querySelector(".section");

    item.addEventListener("click", function (e) {
      if (this.classList.contains("active")) return;
      this.classList.add("active");
      if (activeButton) {
        activeButton.classList.remove("active");
      }
      activeButton = this;
    });
  });
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>