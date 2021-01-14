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
