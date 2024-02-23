<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="manifest" type="application/json" href="./manifest.json">

  <title>API | Login</title>
</head>
<body>
  <?php require_once __DIR__ . '/includes/header.inc'; ?>

  <noscript>
    <p>
      Please, enable the JavaScript in your browser.
    </p>
  </noscript>

  <main>
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
</body>
</html>