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
    <h1>{titulo}</h1>

<div class="mb-3">
  <form class="" action="{base_url}/disco/public/genre/save" method="post">
    <label for="name" class="form-label">Name:</label>
    <input class="form-control" type="text" name="name" id="name" value="" minlength="3" maxlength="255" required>
    <button class="btn btn-danger mb-3" type="submit" name="button">Save</button>
  </form>
</div>

  </body>
</html>
