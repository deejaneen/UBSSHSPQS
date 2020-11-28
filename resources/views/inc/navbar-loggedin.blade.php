<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <img class="navbar-brand" src="<?php echo asset('images.University_of_Baguio_textlogo')?>" alt="UB Logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/home">Welcome (Account Name) (Student ID),
                    <!--If admin, include user type--> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/create-print-job">Create Print Job
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="#"><span class=" glyphicon glyphicon-bell">Notifications</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="  	glyphicon glyphicon-user"></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/home">Print History</a>
                        <a class="dropdown-item" href="/edit-account">Edit My Account</a>
                        <a class="dropdown-item" href="/support">Support</a>
                        <div class="dropdown-divider"></div>
<!--If admin, include ff:-->
                        <a class="dropdown-item" href="/view-accounts">View Accounts</a>
                        <a class="dropdown-item" href="/view-transactions">View Print Job Queue</a>
                        <a class="dropdown-item" href="/generate-reports">Report Generation</a>
<!--x---If admin, include ff:---x-->
                        <a class="dropdown-item" href="/login">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
  </nav>