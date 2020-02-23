<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <?php
        require_once("url_script.php");
        $c = getBaseUrl();
      ?>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <div class="container">
        <form action="script.php" method="POST" enctype="multipart/form-data">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file" name="pdf">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <button class="btn waves-effect waves-light" name="convert" type="submit">Convert to audio</button>
        </form>
        <?php
          session_start();
          if (isset($_SESSION['filename'])) {
            $filename = $_SESSION['filename'];
            session_unset();
            echo '<a class="btn waves-effect waves-light red" href="'.$c.'download.php?file='.$filename.'">Download</a>';
          }
        ?>
      </div>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>            
    </body>
  </html>