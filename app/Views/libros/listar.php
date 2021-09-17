<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel=StyleSheet href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" type="text/css">
    <link rel=StyleSheet href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap.min.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap.min.js"></script>

</head>
<body>
  lista de libros
  <?php 
  // print_r($libros); 
  ?>
  <div class="container">
    <form method="post" action="">
      <input type="text" name="nombres" placeholder="nombre">  
      <input type="text" name="imagen" placeholder="imagen">  
      <button >Registra</button>
    </form>
    <!-- <table class="table table-light"> -->
    <table id="example" class="display" style="width:100%">
      <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>imagen</th>
          <th>nombre</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($libros as $lib):
          ?>
          <tr>
            <td><?php echo $lib['id']; ?></td>
            <th><?php echo $lib['nombre']; ?></th>
            <th><?php echo $lib['image']; ?></th>
            <th>editarborrar</th>
          </tr>
          <?php
          endforeach;
          ?>
      </tbody>
    </table>
  </div>

</body>
</html>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        // ajax:           "../data/2500.txt",
        deferRender:    true,
        scrollY:        200,
        scrollCollapse: true,
        scroller:       true
    } );
} );
</script>