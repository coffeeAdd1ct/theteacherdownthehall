<html>
<head>
  <?php include './scripts/head.php';?>
</head>
<body>
  <div class="header">
    <div class="menu" id="mobile_menu">
      <svg id="menu_button" viewBox="0 0 26 21" onclick="togglemenu()">
        <line stroke="currentColor" x1="1" x2="24" y1="2" y2="2" stroke-width="2" stroke-linecap="round"></line>
        <line stroke="currentColor" x1="1" x2="24" y1="11" y2="11" stroke-width="2" stroke-linecap="round"></line>
        <line stroke="currentColor" x1="1" x2="24" y1="20" y2="20" stroke-width="2" stroke-linecap="round"></line>
      </svg>
      <div id="dropdown">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
    <?php include './scripts/banner.php';?>
  </div>
  <div class="content">
    <div class="section">
      <img src="images/logo.png" id="logo"/>
    </div>
    <?php include './scripts/form.php';?>
    <?php include './scripts/footer.php';?>
  </div>
</body>
<html>
