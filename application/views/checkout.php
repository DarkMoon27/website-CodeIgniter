
<?php 	 foreach($address as $row)
              	{
              		$fname=$row->fname;
              		$lname=$row->lname;
              		$email=$row->email;
              		$mno=$row->mno;
              		$altmno=$row->altmno;
              		$address1=$row->address1;
              		$address2=$row->address2;
              		$city=$row->city;
              		$postcode=$row->postcode;
              		$state=$row->state;
              	}?>

<div id="maincontainer">
  <section id="product">
    <div class="container">
    
      
      <div class="row">     
        <div class="span2">
          <aside>
            <div class="sidewidt">
              <h4 class="heading2"><span> Cek langkah-langkah</span></h4>
              <ul class="nav nav-list categories">
                <li>
                  <a class="active" href="#">Alamat Pengiriman</a>
                </li>
                <li>
                  <a href="#">Konfirmasi Pesanan</a>
                </li>
                <li>
                  <a href="#">Metode Pembayaran</a>
                </li>
               
              </ul>
            </div>
          </aside>
        </div>   
        
        
        <div class="span9" style="margin-left:40px;" id="shipping">
          
         
          <div class="checkoutsteptitle"><h3><span class="maintext">langkah 1:</span><span class="subtext">  Detail Pengiriman</span><a class="modify">Modifikasi</a></h3> 
          </div>
         
          <div class="checkoutstep">
            <div class="row">
              <?php if(!empty($address))
              
              {?>
              <form class="form-horizontal"  method="post" action="<?php echo site_url('tv/updateaddress')?>">
                
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >Nama Depan<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $fname?>">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Nama Belakang<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $lname?>">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >E-Mail<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $email?>">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Nomor Telepon<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $mno?>">
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label" >Nomor Telepon Alternatif<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $altmno?>">
                      </div>
                    </div>
                   
                  </div>
                  <div class="span4">
                    
                    <div class="control-group">
                      <label class="control-label" >Alamat 1<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $address1?>">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Alamat 2</label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $address2?>">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Kota/Kabupaten<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $city?>">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Kode Pos<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $postcode?>">
                      </div>
                    </div>
                   
                    <div class="control-group">
                      <label class="control-label" >Provinsi<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" placeholder="<?php echo $state?>">
                      </div>
                    </div>
                  </div>
                
            <input type="submit"  class="btn btn-orange pull-right"  value="Save & Continue">
            </form>
           <?php }
           else {?>
           
           <form class="form-horizontal"  method="post" action="<?php echo site_url('tv/shippingaddress')?>">
                
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >Nama Depan<span class="red" >*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value="" name="fname" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Nama Belakang<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="lname" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >E-Mail<span class="red">*</span></label>
                      <div class="controls">
                        <input type="email" class=""  value=""  name="email" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Nomor Telepon<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="mno" required> 
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label" >Nomor Telepon Alternatif<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="altmno" required>
                      </div>
                    </div>
                   
                  </div>
                  <div class="span4">
                    
                    <div class="control-group">
                      <label class="control-label" >Alamat 1<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="address1" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Alamat 2</label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="address2">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Kota/Kabupaten<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="city" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Kode Pos<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="postcode" required>
                      </div>
                    </div>
                   
                    <div class="control-group">
                      <label class="control-label" >Provinsi<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" class=""  value=""  name="state" required>
                      </div>
                    </div>
                  </div>
                
            <input type="submit"  class="btn btn-orange pull-right"  value="Save & Continue">
            </form>
           <?php }?>
              
            </div>
            </div>
          </div>
     
      </div>
    </div>
  </section>
</div>



