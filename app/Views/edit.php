<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>{titulo}</h1>
    <h2></h2>
    <form class="" action="save" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="{name}" minlength="3" maxlength="255" required>
      <input type="hidden" name="id" id="id" value="{id}">
      <button type="submit" name="button">Save</button>
    </form>
  </body>
</html>
