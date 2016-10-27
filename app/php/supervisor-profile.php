<!DOCTYPE html>
<html ng-app='supervisor' lang='en'>
<head>
  <meta charset='utf-8'>
  <title>VRC | Supervisor Dashboard</title>
  <meta name='description' content=''>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>

  <!-- STYLE SHEETS -->
  <link href='../../views/style/normalize.css' rel='stylesheet' media='all'>
  <!-- TO DO: Load BS files into project instead -->
  <!-- <link href='../../views/style/bootstrap.min.css' rel='stylesheet' media='all'> -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link href='../../views/style/supervisor.css' rel='stylesheet' media='all'>

  <!-- SCRIPTS -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script src='../../app/vendor/angular.min.js'></script>
  <script src='../../app/vendor/angular-route.min.js'></script>
  <script src='../../app/vendor/angular-cookies.min.js'></script>
  <script src='../../app/vendor/angular-local-storage.min.js'></script>
  <script src='../../app/app.js' type='text/javascript'></script>
  <script src='../../app/controllers/shared-ctrl.js' type='text/javascript'></script>
  <script src='../../app/controllers/supervisor-ctrl.js' type='text/javascript'></script>
  <script src='../../app/services/data-service.js' type='text/javascript'></script>

</head>
<body ng-controller = 'supervisorCtrl' ng-controller = 'sharedCtrl'>

  <!-- Vertical Navigation -->
  <nav class='navbar navbar-inverse'>
    <div class='container-fluid'>
      <div class='navbar-header'>
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>                        
        </button>
        <a class='navbar-brand' href='#'>Virtual Roll Call</a>
      </div>
      <div class='collapse navbar-collapse' id='myNavbar'>
        <ul class='nav navbar-nav navbar-right'>
          <li class='dropdown'>
            <a class='dropdown-toggle' data-toggle='dropdown'>{{name}} <b class='caret'></b></a>
            <ul class='dropdown-menu'>
              <li>
                <a href='#password'><span class='glyphicon glyphicon-cog'></span> Change Password</a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div> 
  </nav>
  
  <!-- Horizontal Navigation -->
  <div class='container-fluid text-center'>    
    <div class='row content'>
      <div class='col-sm-2 sidenav'>
        <ul class='a'>
          <li class='a'><a class='active' href='#upload'>Manage Documents</a></li>
          <li class='a'><a href='#reset'>Reset Password</a></li>
        </ul>
      </div>
      
      <!-- content will change according to route -->
      <section ng-view></section>

    </div>
  </div>
</body>
</html>

