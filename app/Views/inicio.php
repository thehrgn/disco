<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<title></title>
  </head>
  <body>
    <h1>Genres</h1>
    <table class="table table-hover">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th colspan="2">Options</th>
      </thead>
      <tbody>
        {genres}
          <tr>
            <td></td>
            <td>{name}</td>
            <td>
              <a href="{base_url}/disco/public/genre/edit/{id}">Edit</a>
              <a href="{base_url}/disco/public/genre/delete/{id}">Delete</a></td>
          </tr>
        {/genres}
      </tbody>
    </table>
  </body>
</html>
