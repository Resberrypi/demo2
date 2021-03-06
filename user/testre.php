<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600'>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="cont_principal">

  <div class="cont_centrar">

    <div class="cont_login">

      <form action="">
        <div class="cont_tabs_login">
          <ul class='ul_tabs'>
            <li class="active"><a href="#" onclick="sign_in()">SIGN IN</a>
              <span class="linea_bajo_nom"></span>
            </li>
            <li><a href="#up" onclick="sign_up()">SIGN UP</a><span class="linea_bajo_nom"></span>
            </li>
          </ul>
        </div>


        <div class="cont_text_inputs">
          <input type="text" class="input_form_sign " placeholder="NICKNAME" name="name_us" />

          <input type="text" class="input_form_sign d_block active_inp" id="name" placeholder="USERNAME" name="name" />

          <input type="password" class="input_form_sign d_block  active_inp" id="psw" placeholder="PASSWORD" name="psw" />
          <input type="password" class="input_form_sign" placeholder="CONFIRM PASSWORD" name="conf_pass_us" />

          <a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>
          <div class="terms_and_cons d_none">
            <p><input type="checkbox" name="terms_and_cons" /> <label for="terms_and_cons">Accept  Terms and Conditions.</label></p>

          </div>
        </div>
        <div class="cont_btn">
          <button class="btn_sign" type="button" onclick="signin()">SIGN IN</button>

        </div>

      </form>
    </div>

  </div>


</div>

<script  src="../js/index.js"></script>

</body>

</html>
