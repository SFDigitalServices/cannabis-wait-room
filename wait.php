<!doctype html>
<html>
  <head>
    <title>Wait Room Page</title>
    <link href="css/waiting.css" rel="stylesheet" />
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div id="P:T:F:navbar-header" class="navbar-header">
          <a href="https://my.businessportal.sfgov.org/" class="navbar-brand"><img src="http://businessportal.sfgov.org/sites/all/themes/ccsf_theme/images/header/header_logo.png" style="max-height: 125px;" title="City of San Francisco Business Portal" class="img-responsive"></a>
        </div>
      </div>
    </div>
    <div class="page-wrap">
      <div class="items-wrap">
        <div class="panel-panel">
          You can apply for a Cannabis business permit on <strong>Tuesday, May 22 at 10 am</strong>.
          <p class="help-text">(You may need to clear your cache and update your browser to see the new page.)</p>
          <div id="countdown" style="text-align:center;"></div>
        </div>
        <div class="panel-content">
          <h2>Before you apply</h2>
          <div>
            <ul>
              <li>Get a <a href="https://my.businessportal.sfgov.org/CommunitiesSelfReg?returl=https://businessportal.sfgov.org/sfuser/login/%2F">Business Portal Account</a></li>
              <li>Make sure the location you want permitted is listed as an <a target="_blank" href="http://sftreasurer.org/account-update">address on your Business Account</a></li>
              <li>Complete the <a target="_blank" href="https://officeofcannabis.sfgov.org/requirements/checklist">checklist</a></li>
            </ul>
          </div>
          <br>
          <h2>Tech disclaimer</h2>
          <p>The City and the Office of Cannabis is not responsible for any damages or loss of earnings from using this application. We do not accept responsibility for any money you have spent before being granted a Cannabis Business Permit.</p>
          <p>All decisions on applications, including what time applications are considered complete, is at the sole discretion of the Director of the San Francisco Office of Cannabis and is not negotiable.</p>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/moment.min.js"></script>
    <?php echo "<script>var launchDate = '" . $launchDate . "';</script>"; ?>
    <script type="text/javascript" src="js/waiting.js"></script>
  </body>
</html>