<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <center>
          <div class="card">
               <div class="card-header mt-5">
                 LOGIN
               </div>
               <div class="card-body">
                    <img src="https://paradipport.gov.in/admin/images/login.png" width="100px" height="100px" alt="">
                    <h5 class="card-title">SILAHKAN LOGIN TERLEBIH DAHULU</h5>
                    <form action="/user/ceklogin" method="POST">
                         @csrf
                         <div class="form-floating">
                              <label for="floatinginput">Email</label>
                              <input type="email" name="email" class="form-control w-50" id="floatinginput" required autofocus>
                         </div>
                         <div class="form-floating">
                              <label for="floatingpassword">Password</label>
                              <br>
                              <input type="password" name="password" class="form-contro w-50" id="floatingpassword" required autofocus>

                         </div>
                         <br>
                         <button class="w-50 btn btn-lg btn-primary" type="submit"> Sign In</button>
                    </div>
               </div>
          </form>
     </center>
