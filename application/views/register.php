

<div id="maincontainer" style="margin-top:50px;">
  <div id="product">
    <div class="container">
    
      <div class="row">        
        <!-- Account Login-->
        <div class="">
         
          <div class="checkoutsteptitle"></div>
          <div class="checkoutstep ">
           <div class="newcustomer " >
              <h3 class="heading3" style="margin-bottom:20px;">Masukkan data Anda untuk registrasi</h3>
              <div class="loginbox">
                  <form class="form-vertical" action="<?php echo site_url('tv/insert/'.$pid) ?>" method="post">
                   		<div>
                   		
                             <div class="controls" style="margin-bottom:12px;">
                      <select name="type"  id="type" style="width:256px;">
                          <option disabled selected>Tipe Registrasi</option>
                          <option value="2">Pedagang/Pembeli</option>
						  <option value="3">Transporter</option>
						 
                       </select>
                      </div>
                    </div>
                          <div >
                              <div class="controls" style="margin-bottom:8px;">
                                 <input type="text" class="span3" name="fname" style="text-transform: capitalize;" placeholder= "Nama Depan" required>
                             </div>
                        </div>
                        
                    <div>
                  
                      <div class="controls" style="margin-bottom:8px;">
                        <input type="text"  class="span3" name="lname" style="text-transform: capitalize;" placeholder= "Nama Belakang"  required>
                      </div>
                    </div>
                    
                    <div>
                    <div class="controls" style="margin-bottom:8px;">
                        <input type="email"  class="span3" name="email" placeholder= "Email">
                      </div>
                    </div>
                    <div>
                    <div class="controls" style="margin-bottom:8px;">
                        <input type="password"  class="span3" name="password" placeholder= "Password (Min 6 & Max 15)" pattern="{6,15}$" required>
                      </div>
                    </div>
                    <div>
                    <div class="controls" style="margin-bottom:8px;">
                        <input type="password"  class="span3" name="cpassword" placeholder= "Konfirmasi Password" pattern="{6,15}$" required>
                      </div>
                    </div>
                    <div>
                    <div class="controls" style="margin-bottom:8px;">
                        <input type="tel"  class="span3" name="contact_no" placeholder= "Nomor Telepon" pattern="[\b(7\8\9)]\d{9,9}" required>
                      </div>
                    </div>
                    <div>
                    <div class="controls" style="margin-bottom:8px;">
                        <input type="text"  class="span3"  name="address"  placeholder= "Alamat" required>
                      </div>
                    </div>
                   
                    <br>
                    <input type="submit" Value="Registrasi" class="btn btn-orange">
                    
            
                  </form>
              </div>
            </div>
            
            <div class="returncustomer">
              <h3 class="heading3" style="margin-bottom:20px;">Login</h3>
              <div class="loginbox">
                <form class="form-vertical" action="<?php echo site_url('tv/authenticate/'.$pid) ?>" method="post">
                  <fieldset>
                    <div >
                     
                      <div class="controls" style="margin-bottom:10px;">
                        <input type="email" class="span3" name="email" placeholder= " Masukkan Email Anda">
                      </div>
                    </div>
                    <div >
                  
                      <div class="controls">
                        <input type="password"  class="span3" name="password" placeholder= " Masukkan Password Anda">
                      </div>
                    </div>
                    <a class="" href="<?php echo site_url('tv/forgetpassword')?>">Lupa Password</a>
                    <br>
                    <br>
                    <input type="submit" name="Login" class="btn btn-orange">
                    
                  </fieldset>
                </form>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  </div>
         
          