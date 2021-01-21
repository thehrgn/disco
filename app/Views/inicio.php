<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="{base_url }/disco/public/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<title></title>
  </head>
  <div class="container">


  <body>
    <h1>Genres</h1>
    <table class="table table-hover" id="tableGenres">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Options</th>
      </thead>
      <tbody>
      </tbody>
    </table>
  </body>
  </div>
</html>

<script type="text/javascript">
$(document).ready( function () {
  $('#tableGenres').DataTable(
    {
      "ajax":'Genre/genresjs',
      "error": function(d){
        console.log("es un error");
      },
      "dataSrc":'',
      "columns": [
            { "data": "id" },
            { "data": "name" },
            {
              "render": function(data, type, full, meta){
                return " <a href='' class='btn btn-warning' role='button'>Edit</a><a href='' class='btn btn-danger' role='button'>Delete</a>   ";
              }
            }
            ,

    ]
    }
  );
} );
</script>
