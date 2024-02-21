<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/x-icon" size="24x24" href="src/public/favicons/favicon.ico">
  <link rel="stylesheet" type="text/css" href="src/public/css/table.css">
  <link rel="manifest" href="./manifest.json">

  <title>API | Home</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header.inc'; ?>

  <main>

    <section>
      <h2>Routes</h2>

      <table>
        <caption>Index</caption>
        <thead>
          <tr>
            <th>Method</th>
            <th>Route</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>GET</td>
            <td>/</td>
            <td>This Page</td>
          </tr>
          <tr>
            <td>GET</td>
            <td>/login</td>
            <td>The login page</td>
          </tr>
          <tr>
            <td>GET</td>
            <td>/logout</td>
            <td>Same above</td>
          </tr>
          <tr>
            <td>GET</td>
            <td>/students</td>
            <td>Get all the students</td>
          </tr>
          <tr>
            <td>POST</td>
            <td>/students</td>
            <td>Register a new student</td>
          </tr>
          <tr>
            <td>GET</td>
            <td>/students/:id</td>
            <td>Get informations of the student with ID :id</td>
          </tr>
          <tr>
            <td>UPDATE</td>
            <td>/students/:id</td>
            <td>Updates the student with ID :id</td>
          </tr>
          <tr>
            <td>DELETE</td>
            <td>/students/:id</td>
            <td>Remove the student with ID :id</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3">
              <abbr title="Observation">Obs.</abbr>:The routes should be preffixed with the server name.
            </td>
          </tr>
        </tfoot>
      </table>

    </section>

  </main>

  <?php require_once __DIR__ . '/includes/footer.inc'; ?>
</body>
</html>