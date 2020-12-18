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
        <th>Id</th>
        <th>Name</th>
        <th>Options</th>
      </thead>
      <tbody>
        {genres}
          <tr>
            <td>{id}</td>
            <td>{name}</td>
            <td><a href="genre/edit/{id}">Edit</a></td>
          </tr>
        {/genres}
      </tbody>
    </table>
  </body>
</html>
