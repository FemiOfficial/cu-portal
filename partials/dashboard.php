<div class = "header">
<nav class="navbar navbar-inverse" style="padding-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <button id = "toggleBtn" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="color:#333a5b;"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> -->

      <a class="navbar-brand" href=""><img height="45px" src="assets/img/logo.png"><img src="assets/img/cov.uni.txt.png"></a>
      <!-- <div class= "nav-right">
       <ul class="nav navbar-nav navbar-right">
        <li class = "profile-pic"><img src="assets/img/profile.jpg" height="45px" width="45px"/><span>Welcome, James</span></li>
        <li><a href="#" title="Logout"><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
      </ul> 
      </div>
       --> 
    </div>
    <!-- <div class="collapse navbar-collapse" id="myNavbar">
     --> 
    <!-- </div> -->
  </div>
</nav>
</div>
<div class = "container">
        <div class= "col-md-3" style="margin: 0px;padding:0px;">
             <div class = "maincontent">
             <div class = "sidenav">
                <nav class = "nav">
                <ul>
                <div class="dropdown">
                  <li  id = "profile-page"><a href = "" title="Profile"><i class="fa fa-user-o"></i><span>Profile</span></a></li>
                </div>
                   <div class="dropdown">
                        <li><a href = "" title="Class Administration"><i class="fa fa-columns"></i><span>Class Administration</span></a>
                        <div class ="content">
                           <ul>
                                <li id = "course-evaluation"><a href=""  title="Course Evaluation">Course Evaluation</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
                           </ul>
                        </div>
                        </li>
                    </div>
                  <div class = "dropdown">
                    <li><a href="" title="Finance"><i class="fa fa-credit-card"></i><span>Finance</span></a>
                       <div class = "content">
                          <ul>
                            <li id = "pay-fees"><a href="" title="Pay Fees">Pay Fees<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li id = "payment-receipt"><a href="" title="Payment Receipt">Payment Receipt<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                          </ul>  
                       </div> 
                  </li>  
                  </div>
                  <div class="dropdown">
                      <li><a href="" title="Grading"><i class="fa fa-bar-chart-o"></i><span>Grading</span></a>
                       <div class = "content">
                           <ul>
                              <li id = "attendance-ca"><a href="" title="Attendance & CA">Attendance & CA<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            </ul>  
                       </div>
                       
                  </li>
                    
                  </div>
                  <div class="dropdown">
                      <li><a href="" title="Registration"><i class="fa fa-drivers-license-o"></i><span>Registration</span></a>
                        <div class="content">
                            <ul>
                            <li id = "add-drop"><a href="" title="Add & Drop">Add & Drop<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li id = "course-reg"><a href="" title="Course Registration">Course Registration<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li id = "eds-practical"><a href="" title="EDS Practical">EDS Practical<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <li id = "print-reg"><a href="" title="Print Registration">Print Registration<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            
                       </ul>  
                        </div>
                        
                  </li>
                    
                  </div>
                  <div class="dropdown">
                           <li><a href="" title="Resumption"><i class="fa fa-calendar-minus-o"></i><span>Resumption</span></a>
                               <div class="content">
                         
                               <ul>
                                    <li id = "print-clearance"><a href="" title="Unofficial Result">Print Clearance<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                              </ul> 
                              </div>
                            </li>  
                        
                          
                  </div>
                  <div class = "dropdown">
                      <li><a href="" title="Result"><i class="fa fa-wpforms "></i><span>Result</span></a>
                          <div class = "content">
                              <ul>
                                <li id = "print-transcript-unofficial"><a href="" title="Unofficial Result">Unoffical Transcript<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                                <li id = "request-official-transcript"><a href="" title="Request Official">Request Official<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>              
                          </ul>  
                          </div>
                          
                  </li>  
                  </div>
                 
                  
                </ul>
              </nav>
      
              </div>
    
        </div>
        </div>
  <div class="col-md-9" ng-controller = "logincontroller">
      <?php
        include_once("profile-page.php");
        include_once("course-evalution.php");
        include_once("pay-fees.php");
        include_once("payment-receipt.php");
        include_once("attendance-ca.php");
        include_once("addrop.php");
        include_once("course-registration.php");
        include_once("eds-practical.php");
        include_once("print-registration.php");
        include_once("print-clearance.php");
        include_once("print-transcript.php");
        // include_once("request-official.php");
      
      ?>
      
  </div>
  </div>
    
</div>
