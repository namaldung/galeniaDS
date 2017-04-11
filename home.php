<!DOCTYPE html>
  <html>
    <head>
      <link rel="shortcut icon" href="logo.png" />
      <title>GDS</title>
      <!--Import Google Icon Font-->
      <link type="text/css" href="css/MaterialIcons.css" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" href="css/materialize.css" rel="stylesheet" media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <nav>
        <!-- header baris pertama-->
        <div class="nav-wrapper row">
          <!-- logo -->
          <ul class="col s2">
            <li>
              <img class="brand-logo col s2" src="galenia.png"/>
            </li>
          </ul>
          <!-- search bar -->
          <form class="col s6 offset-s1">
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons left">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
          <!-- tombol user -->
          <ul class="col s1 offset-s2">
            <li>
              <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">perm_identity</i></a>
            </li>
          </ul>
        </div>
        <!-- header baris kedua -->
        <div class="nav-wrapper row">
          <!-- tombol tambah file -->
          <ul class="col s2">
            <li>
              <a class="waves-effect waves-light btn"><i class="material-icons left">note_add</i>Add</a>
            </li>
          </ul>
          <!-- direktori -->
          <div class="col s9">
            <a href="#" class="breadcrumb">My Drive</a>
            <a href="#" class="breadcrumb">Tahun 2017</a>
            <a href="#" class="breadcrumb">Bulan April</a>
          </div>
          <!-- tombol setting -->
          <ul class="col s1">
            <li>
              <a class="btn-flat btn-large waves-effect waves-light"><i class="material-icons">settings</i></a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- bar sebelah kiri -->
      
    </body>
  </html>
