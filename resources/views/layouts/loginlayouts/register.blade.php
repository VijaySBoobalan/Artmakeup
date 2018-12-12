@include('layouts.loginlayouts.header')

<body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
  
      <div class="login-box">
        <form class="login-form" action="dashboard.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTER</h3>
          <div class="form-group">
            <label class="control-label">NAME</label>
            <input class="form-control" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label class="control-label">CONFIRMPASSWORD</label>
            <input class="form-control" type="password" placeholder="Password">
          </div>

          
          <div class="form-group btn-container">
             <button class="btn btn-primary btn-block"><i class="fa fa-user-plus fa-lg fa-fw"></i>REGISTER </button>
          </div><br>
          
        </form>
        
      </div>
    </section>