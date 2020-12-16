<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Genres</h1>
    <table border="1">
      <thead>
        <th>Name</th>
      </thead>
      <tbody>
        <?php foreach ($genres as $key => $genre): ?>
          <tr>
            <td><?=$genre['name'];?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
