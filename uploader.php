<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>File Uploader</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>XLSX to MySQL</strong>
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Save Excel Spreadsheet to MySQL database</h1>
      <p>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if(!empty($_FILES['sample_file']))
  {
    $originalFileName = basename( $_FILES['sample_file']['name']);
    $uploadedFileName = 'uploaded_file_' . time() . '.' . pathinfo($originalFileName, PATHINFO_EXTENSION); //basename( $_FILES['sample_file']['name']);

    if(move_uploaded_file($_FILES['sample_file']['tmp_name'], $uploadedFileName)) {
      echo "The file ".  $originalFileName. " has been uploaded successfuly! File will be imported to the databae. A report email will be sent.";
    } else{
      echo "An error occurred during file upload, please try again!";
    }
  }
  exec('php xlsx_to_mysql.php ' . $uploadedFileName . ' > /dev/null 2>/dev/null &');
  ?>

</br></br>
<p><strong>Upload new file:</strong></p>
<?php }  ?>
      <form action="" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="sample_file">
        <input type="submit" value="Upload File" name="submit">
    </form>

    </div>
  </div>

</main>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    </body>
</html>
