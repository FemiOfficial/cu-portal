 <div class="wrapper">
       <div ng-controller = "logincontroller">
        <form class="login" action="/" id = "loginForm">

          <p class="title"><img src="assets/img/cu-logo.png" /><br>Sign in to CU Portal</p>
          <input type="text" placeholder="Username" id = "username" ng-model = "username" autofocus/>
          <i class="fa fa-user"></i>
          <input type="password" id = "password" ng-model="password" placeholder="Password" />
          <i class="fa fa-key"></i>
            <div class="checkbox" >
                  <label>
                      <input type="checkbox" value="" checked>
                      <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                        Remember Me
                  </label>
                    <a href="#/dashboard">Forgot your password?</a>
              </div>

          <button type = "button" ng-click = "submit()">
            <span class="btnlogin">Log in</span>
          </button>

      </form>
      
    </div>
  <footer>&copy 2017 CU Portal</footer>
 </div>
 