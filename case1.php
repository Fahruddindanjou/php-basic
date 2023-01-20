<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <?php  
    $data1 = "Tono";
    $data2 = "Harvi";
    $data3 = "Simon";

    $born1= "jakarta";
    $born2 = "Amsterdam";
    $born3 = "Solo";

    $hobi1 = "Analyst";
    $hobi2 = "Design";
    $hobi3 = "Coding";
  ?>

<div class="container">
  <table class="table m-5">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Asal</th>
        <th scope="col">Hobi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><?php echo $data1; ?></td>
        <td><?php echo $born1; ?></td>
        <td><?php echo $hobi1; ?></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><?php echo $data2; ?></td>
        <td><?php echo $born2; ?></td>
        <td><?php echo $hobi2; ?></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td><?php echo $data3; ?></td>
        <td><?php echo $born3; ?></td>
        <td><?php echo $hobi3; ?></td>
      </tr>
    </tbody>
  </table>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>