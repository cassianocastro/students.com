<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>API | Login</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header.inc'; ?>

  <main>

    <noscript>
      <p>Please, enable the JavaScript in your browser.</p>
    </noscript>

    <section>
      <h1>Form Section</h1>

      <form id="loginForm" action="" method="post" autocomplete="off">
        <fieldset>
          <legend>
            Enter with your data<abbr title="Required Fields">***</abbr>
          </legend>

          <label>
            User:

            <input type="text" name="" value="" required>
          </label>

          <label>
            Password:

            <input type="password" name="" value="" required>
          </label>
        </fieldset>

        <menu>
          <li><button type="reset">Reset</button></li>
          <li><button type="submit">Submit</button></li>
        </menu>
      </form>

      <output form="loginForm" name="result"></output>
    </section>

  </main>

  <?php require_once __DIR__ . '/includes/footer.inc'; ?>

  <script src=""></script>
</body>
</html>