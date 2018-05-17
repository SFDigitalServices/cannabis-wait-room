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
          <a href="https://my.businessportal.sfgov.org/" class="navbar-brand"><img src="https://businessportal.sfgov.org/sites/all/themes/ccsf_theme/images/header/header_logo.png" style="max-height: 125px;" title="City of San Francisco Business Portal" class="img-responsive"></a>
        </div>
      </div>
    </div>

    <section class="splash-header bg-image ng-scope">
  <div class="row">
    <header class="hero-header">
        <h1 class="hero-title">You can apply for a Cannabis Business Permit here on <br><span class="date">Tuesday, May 22 at 10 am</span>.</h1>
    </header>
  </div>
</section>

    <div class="page-wrap">
      <div class="items-wrap">
        <div class="panel-panel">
          <div class="countdown-text">You can apply in</div>
          <div id="countdown" style="text-align:center;"></div>
          <p class="help-text">(You may need to <a target="_blank" label="Clear your cache" href="http://www.refreshyourcache.com/en/home/">clear your cache</a> and update your browser to see the new page.)</p>
        </div>
        <div class="panel-content">
          <p>This page will automatically redirect to the application on May 22 at 10 am.</p><br>
          <h2>Before you apply</h2>
          <div>
            <ul>
              <li>Get a <a href="https://my.businessportal.sfgov.org/CommunitiesSelfReg?returl=https://businessportal.sfgov.org/sfuser/login/%2F" target="_blank" label="Business Portal Account Sign Up">Business Portal Account</a> so you can fill in the application</li>
              <li>Make sure your business is registered with the City. <a target="_blank" href="http://sftreasurer.org/account-update" label="Update your Business Account">Online registration</a> takes a few minutes.</li>
              <li>Look up your <a href="https://data.sfgov.org/Economy-and-Community/Map-of-Registered-Business-Locations/ednt-jx6u" target="_blank" label="Look up 7-digit Business Account Number (BAN)">7-digit Business Account Number (BAN)</a>.</li>
              <li>Check the location you want permitted is listed as an address on your Business Account. If not, <a href="https://sftreasurer.org/account-update" target="_blank" label="Update your Business Account">you can add the location to your account</a> even if you haven't yet signed a lease. If you need to add your location to your Business Account, do so at least one day before you intend to submit the application.</li>
              <li>Know your Equity Applicant ID (from an email from the Office of Cannabis).</li>
              <li>Equity Incubator's business name if you are being incubated.</li>
              <li>Information included on the <a target="_blank" href="https://officeofcannabis.sfgov.org/requirements/checklist">Cannabis Business Permit Application (part 1) checklist</a>.</li>
            </ul>
          </div>
          <br>

           <h2>About the online application</h2>
          <div>
            <ul>
              <li>The application is on the Business Portal. You'll need an account before you can apply.</li>
              <li>If you get stuck on the landing page rather than redirected to the application form, <a target="_blank" label="Clear your cache" href="http://www.refreshyourcache.com/en/home/">clear your cache</a> and refresh the page.</li>
              <li>Multiple users logging into the same Business Portal account at the same time can trigger technical difficulties that may delay your application's submission.</li>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-54629412-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-54629412-1');
    </script>
  </body>
</html>