<body>

  <div id="mySidenav" class="sidenav bg-dark">
    <a href="javascript:void(0)" class="closebtn text-muted " onclick="closeNav()"><i class="fa-solid fa-close"></i></a>

    <a href="#" class="navbar-brand text-muted ">
      <img src="assets/img/notas.png" width="70" alt="">
      Graffiti Zeca
    </a>

    <a class="text-muted " href="index.php"><i class="fa-solid fa-home"></i> Home</a>
    <a class="text-muted " href="discovery.php"><i class="fa-solid fa-user-group"></i> Quem Somos</a>
    <a class="text-muted " href="contact.php"><i class="fa-solid fa-headset"></i> Fale conosco</a>
    <a class="text-muted " href="logout.php"><button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-right-from-bracket"></i> Logout, <?php echo $userLogged; ?></button></a>
  </div>

  <span class="m-3 p-3 rounded bg-dark text-light shadow" onclick="openNav()" style="font-size: 25px; cursor: pointer;"><i class="fa-solid fa-bars-staggered"></i></span>

  <div class="container my-3">
