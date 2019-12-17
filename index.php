<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google Recaptcha</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer type="text/javascript">
    let chaveSite = "6LdY67UUAAAAAKNQrmsVF4imC67YRhgbvwqFJE7K";
    let chaveSecreta = "6LdY67UUAAAAAFq18Otf7US61GOPQF-Tvenpkb8l";
    var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : ' .. '
        });
    </script>
</head>
<body>
    <form action="page2.php" method="POST">
        <input type="text" name="nome">
        <input type="password" name="senha">
        <div class="g-recaptcha" data-sitekey=" COLE A SITEKEY AQUI "></div>
        <input type="submit">
    </form>
</body>
</html>
