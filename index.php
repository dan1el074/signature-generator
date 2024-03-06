<?php
  clearstatcache();

  $name = "";
  $office = "";
  $number = "";
  $showWhatsapp = "";
  $numberEntry = "";
  $errorStyle = "";
  $showCode = false;
  $caracterToReplace = ['-', ' ', '(', ')'];
  $parenthesesToReplace = ['(', ')'];
  $code = "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"margin: auto; margin-top: 60px; display: block;\" width=\"140px\" height=\"140px\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"xMidYMid\">
      <path d=\"M10 50A40 40 0 0 0 90 50A40 42 0 0 1 10 50\" fill=\"#376ca5\" stroke=\"none\">
        <animateTransform attributeName=\"transform\" type=\"rotate\" dur=\"1s\" repeatCount=\"indefinite\" keyTimes=\"0;1\" values=\"0 50 51;360 50 51\"></animateTransform>
      </path>
    </svg>";
  $codeReview = str_replace('\\\"', '\"', $code);

  if (isset($_POST['acao'])) {
    $verifyName = trim($_POST['name']);
    $verifyOffice = trim($_POST['office']);
    $verifyNumber = trim($_POST['number']);

    if (strlen($verifyName) > 1 && strlen($verifyOffice) > 1) {
      $name = $_POST['name'];
      $office = $_POST['office'];
      $numberEntry = $_POST['number'];
      $number = str_replace($parenthesesToReplace, ' ', $numberEntry);

      if(strlen($verifyNumber) > 1) {
        @$showWhatsapp = "<td width=\"13px\" align=\"right\"></td>
        <td width=\"22px\" align=\"left\">
          <img
            src=\"https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/modelo3/whats.png\"
            width=\"18\"
            height=\"18\"
            style=\"display: block\"
          />
        </td>
        <td>
          <a
            href=\"https://wa.me/" . str_replace($caracterToReplace, "", $number) . "\"
            target=\"_blank\"
            title=\"Conversar pelo Whatsapp\"
            style=\"
              font-family: 'Segoe UI', 'Segoe UI Web (West European)',
                'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto,
                'Helvetica Neue', sans-serif;
              font-size: 12pt;
              color: rgb(32, 33, 36);
              text-decoration: none;
            \"
          >
          " . $number . "
          </a>
        </td>";
      }

      $code = "<br />
      --
      <br />
      
      <table style=\"width: 540px; border-collapse: collapse\">
        <tbody>
          <tr>
            <td
              style=\"
                border-right: 2pt solid rgb(23, 78, 134);
                padding-right: 5.4pt;
                padding-left: 5.4pt;
                width: 227.875px;
                height: 157px;
                box-sizing: border-box;
              \"
            >
              <p style=\"margin: 0px\">
                <img
                  width=\"212\"
                  height=\"155\"
                  style=\"width: 212px; height: 155px\"
                  src=\"https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/logo-metaro.png\"
                />
              </p>
            </td>
            <td
              style=\"
                padding-right: 5.4pt;
                padding-left: 15pt;
                word-break: break-word;
                width: 308.844px;
                height: 100px;
                box-sizing: border-box;
              \"
            >
              <p style=\"line-height: normal; margin-top: 0px; margin-bottom: 0px\">
                <span
                  style=\"
                    font-family: 'Segoe UI', 'Segoe UI Web (West European)',
                      'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto,
                      'Helvetica Neue', sans-serif;
                    font-size: 14pt;
                    color: rgb(1, 1, 1);
                  \"
                >
                  <b>" . $name . "</b>
                </span>
              </p>
              <p
                style=\"
                  line-height: normal;
                  margin-top: 0px;
                  margin-bottom: 0px;
                  color: rgb(34, 34, 34);
                \"
              >
                <span
                  style=\"
                    font-family: 'Segoe UI', 'Segoe UI Web (West European)',
                      'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto,
                      'Helvetica Neue', sans-serif;
                    font-size: 12pt;
                  \"
                >
                  " . $office . "
                </span>
              </p>
      
              <div style=\"height: 13px\"></div>
      
              <table
                border=\"0\"
                cellpadding=\"0\"
                cellspacing=\"0\"
                style=\"border-collapse: collapse; margin-bottom: 2px\"
              >
                <tr>
                  <td align=\"center\" valign=\"middle\">
                    <table
                      border=\"0\"
                      cellspacing=\"0\"
                      style=\"border-collapse: collapse; width: 100%\"
                    >
                      <tr>
                        <td width=\"22px\" align=\"left\">
                          <img
                            src=\"https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/modelo3/phone.png\"
                            width=\"18\"
                            height=\"18\"
                            style=\"display: block\"
                          />
                        </td>
                        <td
                          style=\"
                            font-family: 'Segoe UI', 'Segoe UI Web (West European)',
                              'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto,
                              'Helvetica Neue', sans-serif;
                            font-size: 12pt;
                            color: rgb(32, 33, 36);
                          \"
                        >
                          54 3519-0080
                        </td>
                      " . $showWhatsapp . "
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
      
              <table
                border=\"0\"
                cellpadding=\"0\"
                cellspacing=\"0\"
                style=\"border-collapse: collapse\"
              >
                <tr>
                  <td align=\"center\" valign=\"middle\">
                    <table
                      border=\"0\"
                      cellspacing=\"0\"
                      style=\"border-collapse: collapse; width: 100%\"
                    >
                      <tr>
                        <td width=\"22px\" align=\"left\">
                          <img
                            src=\"https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/modelo3/web.png\"
                            width=\"18\"
                            height=\"18\"
                            style=\"display: block\"
                          />
                        </td>
                        <td>
                          <a
                            href=\"https://www.metaro.com.br\"
                            target=\"_blank\"
                            title=\"www.metaro.com.br\"
                            style=\"
                              font-family: 'Segoe UI', 'Segoe UI Web (West European)',
                                'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto,
                                'Helvetica Neue', sans-serif;
                              font-size: 12pt;
                              color: rgb(32, 33, 36);
                              text-decoration: none;
                              margin-bottom: 1px;
                            \"
                          >
                            www.metaro.com.br
                          </a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
      
              <div style=\"height: 16px\"></div>
              <p
                style=\"
                  line-height: normal;
                  margin-top: 0px;
                  margin-bottom: 0px;
                  color: rgb(34, 34, 34);
                \"
              >
                <a
                  href=\"https://www.facebook.com/metarosolucoes\"
                  title=\"facebook.com/metarosolucoes\"
                  target=\"_blank\"
                  style=\"margin-right: 2px\"
                >
                  <img
                    width=\"25\"
                    height=\"25\"
                    style=\"max-width: 688px; margin: 0px\"
                    src=\"https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/modelo3/fb.png\"
                /></a>
                <a
                  href=\"https://linkedin.com/company/metaro-industria-e-com%C3%A9rcio-ltda\"
                  title=\"linkedin.com/metaro-industria-e-comércio-ltda\"
                  target=\"_blank\"
                  style=\"margin-right: 2px\"
                >
                  <img
                    width=\"26\"
                    height=\"26\"
                    style=\"max-width: 688px; margin: 0px\"
                    src=\"https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/modelo3/in.png\"
                /></a>
                <a
                  href=\"https://www.instagram.com/metaro_ind\"
                  title=\"instagram.com/metaro_ind\"
                  target=\"_blank\"
                  style=\"margin-right: 2px\"
                >
                  <img
                    width=\"26\"
                    height=\"26\"
                    style=\"max-width: 688px; margin: 0px\"
                    src=\"https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/modelo3/insta.png\"
                  />
                </a>
              </p>
            </td>
          </tr>
        </tbody>
      </table>
      
      <br />
      <br />
      <span
        style=\"
          font-family: 'Segoe UI', 'Segoe UI Web (West European)', 'Segoe UI',
            -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', sans-serif;
          font-size: 12pt;
        \"
      >
        <i>
          “Muitas das coisas mais importantes do mundo foram conseguidas por
          pessoas<br />que continuaram tentando quando parecia não haver mais nenhuma
          esperança<br />de sucesso.”
        </i>
        DALE CARNEGIE.
      </span>
      ";
      $codeReview = str_replace('\"', '\"', $code);
      $codeReview = str_replace('\\"', '\"', $codeReview);
      $showCode = true;
    } else {
      $name = $_POST['name'];
      $office = $_POST['office'];
      $numberEntry = $_POST['number'];
      $errorStyle = 'style="border: 1px solid red"';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Assinaturas</title>
</head>

<body>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #ffff;
      overflow-y: scroll;
    }

    /* //////// Typography //////// */
    h1 {
      font-family: "Poppins", sans-serif;
      font-size: 30px;
      font-weight: 600;
    }

    p {
      font-family: "Poppins", sans-serif;
      font-size: 16px;
      font-weight: 400;
      color: black;
    }

    a,
    input,
    label,
    textarea {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      text-decoration: none;
    }

    /* //////// Header //////// */
    header {
      background-color: rgb(32, 32, 32);
      width: 100%;
    }

    header nav {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      max-width: 1200px;
      margin: 0 auto;
      padding: 22px 40px 19px;
    }

    header .logo {
      width: 160px;
    }

    /* //////// Main //////// */
    main {
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 1200px;
      padding: 0 42px;
      margin: 30px auto 52px;
    }

    .container-edit {
      display: flex;
      flex-direction: row;
      gap: 40px;
    }

    .container-edit form {
      display: flex;
      flex-direction: column;
    }

    .container-edit form label {
      font-size: 12px;
      margin-top: 6px;
    }

    main .result {
      background-color: #ffff;
      border-left: 1px solid black;
      width: 610px;
      min-height: 340px;
      padding: 15px 15px 15px 40px;
    }

    form input {
      padding: 3px 5px;
      border-radius: 3px;
      border: 1px solid black;
    }

    form input[type="submit"] {
      margin-top: 20px;
      width: 65px;
      padding: 3px 0;
      border-radius: 5px;
      border: 1px solid black;
      cursor: pointer;
      margin-left: 2px;
    }

    form [type="submit"]:hover {
      background-color: rgb(207, 207, 207);
    }

    form .buttons {
      display: flex;
      gap: 10px;
    }

    .buttons .btn-reset {
      margin-top: 20px;
      padding: 3px 10px;
      border-radius: 5px;
      border: 1px solid black;
      cursor: pointer;
      margin-left: 2px;
      font-size: 13px;
      background-color: #ffff;
      color: black;
    }

    .buttons .btn-reset:hover {
      background-color: rgb(207, 207, 207);
    }

    main .code {
      margin-top: 50px;
      border-radius: 15px;
      border: none;
      padding: 22px;
      background-color: rgb(44, 44, 44);
    }

    main .code h1,
    p {
      color: #ffff;
    }

    .code-logo {
      color: white;
      font-size: 40px;
      margin-bottom: 20px;
    }

    .mobile {
      display: none;
    }

    .warning {
      color: black;
    }

    .fade-in-bottom {
      -webkit-animation: fade-in-bottom 0.6s cubic-bezier(0.39, 0.575, 0.565, 1) both;
      animation: fade-in-bottom 0.6s cubic-bezier(0.39, 0.575, 0.565, 1) both;
    }

    @-webkit-keyframes fade-in-bottom {
      0% {
        -webkit-transform: translateY(50px);
        transform: translateY(50px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes fade-in-bottom {
      0% {
        -webkit-transform: translateY(50px);
        transform: translateY(50px);
        opacity: 0;
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
      }
    }

    /* //////// tables //////// */
    .tabs {
      display: flex;
      flex-wrap: wrap;
      color: white;
      margin-top: 30px;
      font-family: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI",
        -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif;
    }

    .tabs span {
      font-weight: bolder;
    }

    .tabs label {
      order: 1;
      display: block;
      padding: 1rem 2rem;
      margin-right: 0.2rem;
      cursor: pointer;
      background: #376ca5;
      border-radius: 7px 7px 0 0;
      transition: background ease 0.2s;
    }

    .tabs .tab {
      order: 99;
      flex-grow: 1;
      width: 100%;
      display: none;
      padding: 1.7rem;
      background: rgb(32, 32, 32);
      border-radius: 0 7px 7px 7px;
      -webkit-box-shadow: 10px 10px 5px -3px rgba(0, 0, 0, 0.1);
      -moz-box-shadow: 10px 10px 5px -3px rgba(0, 0, 0, 0.1);
      box-shadow: 10px 10px 5px -3px rgba(0, 0, 0, 0.1);
    }

    .tabs input[type="radio"] {
      display: none;
    }

    .tabs input[type="radio"]:checked+label {
      background: rgb(32, 32, 32);
    }

    .tabs input[type="radio"]:checked+label+.tab {
      display: block;
    }

    @media (max-width: 45em) {

      .tabs .tab,
      .tabs label {
        order: initial;
      }

      .tabs label {
        width: 100%;
        margin-right: 0;
        margin-top: 0.2rem;
      }
    }

    @media (max-width: 860px) {
      main {
        display: none;
      }

      .mobile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 170px
      }
    }
  </style>

  <header>
    <nav>
      <a href="/signature-generator/">
        <img
          src="https://raw.githubusercontent.com/dan1el074/dan1el074/main/outros/metaro-industria-e-comercio-ltda/logo-metaro-white.svg"
          class="logo" alt="Logo">
      </a>
    </nav>
  </header>

  <main>
    <section class="container-edit">
      <form method="post">
        <label for="name">Nome</label>
        <input type="text" name="name" placeholder="Nome" id="name" value=<?php echo '"' . $name . '" ' . $errorStyle ?> required>

        <label for="name">Cargo</label>
        <input type="text" name="office" placeholder="Cargo" id="office" value=<?php echo '"' . $office . '" ' . $errorStyle ?> required>

        <label for="name">Número</label>
        <input type="text" name="number" placeholder="Número" minlength="11" maxlength="11" id="numero" value=<?php echo '"' . $numberEntry . '"'?>>

        <div class=buttons>
          <input type="submit" value="Gerar" name="acao">
          <a class="btn-reset" href="/signature-generator/">Reset</a>
        </div>
      </form>

      <div class="result">
        <?php echo $codeReview; ?>
      </div>
    </section>

    <?php
      if ($showCode) {
        echo "<div class=\"tabs fade-in-bottom\">
            <input type=\"radio\" name=\"tabs\" id=\"tabone\" checked=\"checked\">
            <label for=\"tabone\" title=\"Entre nas configurações de assinatura do UOL, clique com o botão direito do mouse sobre a caixa de texto e vá em 'Inspencionar', depois clique em 'console', cole o texto gerado e aperte ENTER.\"><span>{ }</span> function</label>
            <div class=\"tab\">
              <p id=\"codeToCopy\"> document.querySelector('.cke_editable.cke_editable_themed.cke_contents_ltr.cke_show_borders').innerHTML = \"" . htmlspecialchars(str_replace('"', '\\"', $code)) . "\"</p>
            </div>
            
            <input type=\"radio\" name=\"tabs\" id=\"tabtwo\">
            <label for=\"tabtwo\"><span>{ }</span> html</label>
            <div class=\"tab\">
              <p id=\"codeToCopy\">" . htmlspecialchars($code) . "</p>
            </div>
          </div>";
      }
    ?>
  </main>

  <div class="mobile">
    <p class="warning">Indisponível na versão mobile!</p>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script>
    $('#numero').mask('(99) 99999-9999');
  </script>
</body>

</html>