
<div class="col-md-12">
          <div class="widget">
          <header class="widget-header">
            <h4 class="widget-title">Yeni Görevli Ekle</h4>
          </header><!-- .widget-header -->
          <hr class="widget-separator">
          <div class="widget-body">
            <div class="m-b-lg">
              <small>
                <div class="alert alert-danger text-center">
            <h4><b>Eklenecek bilgilerin doğruluğunu mutlaka teyit edin!</b></h5>
            <p>Eklenecek olan kayıtların, SKM Başkanı tarafından onaylanmış listede yer alması gerekmektedir. Başkana ait imzayı görmediğiniz kişi ve kişileri lütfen sisteme eklemeyin. Gerekli bilgi için ilgili birim sorumlusuna / SKM Başkanına ulaşın</p>
          </div>
              </small>
            </div>
            <form action="<?php echo base_url("gorevliList/kaydet"); ?>" method="post">
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group" >
                    <label for="isim">İsim</label>
                    <input type="text" class="form-control" id="isim" placeholder="isim" >
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group" >
                    <label for="soyisim">Soyisim</label>
                    <input type="text" class="form-control" id="soyisim" placeholder="soyisim" >
                  </div>
                </div> 
                <div class="col-lg-4">
                  <div class="form-group" >
                    <label for="tcno">T.C. Kimlik No</label>
                    <input type="text" class="form-control" id="tcno" placeholder="tc no girin" >
                  </div>
                </div> 
              </div><!--İlk Satır -->
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="cepno">Cep No</label>
                    <input type="text" class="form-control"  placeholder="cepno"  >
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="cepno">Mahalle</label>
                     <select  class="form-control">
                     <?php foreach ($mahname as $mahn) {?>
                      <option><?php echo $mahn->mahalle_name;?></option>
                    <?php }?>  
                   </select>
                  
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="cepno">Bölge</label>
                     <input  class="form-control" readonly value="">
                      
                 
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                           <label for="cepno">Asil / Yedek</label>
                   <select  class="form-control">
                      <option value="Asil">Asil</option>
                      <option value="Yedek">Yedek</option>
                   </select>

                        </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <button type="submit" class="btn btn-success btn-md">Ekle</button>
            </form>
          </div><!-- .widget-body -->
        </div><!-- .widget -->
      </div><!-- END column -->
    