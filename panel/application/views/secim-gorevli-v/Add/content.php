<div class="col-md-12">
  <div class="widget">
    <header class="widget-header"><h4 class="widget-title">Yeni Görevli Ekle</h4></header><!-- .widget-header -->
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
      <for2m action="<?php echo base_url("gorevliList/kaydet"); ?>" method="post">
        <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label for="isim">İsim</label>
            <input type="text" class="form-control"  placeholder="isim" name="isim" >
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group" >
            <label for="soyisim">Soyisim</label>
            <input type="text" class="form-control" name="soyisim" placeholder="soyisim" >
          </div>
        </div> 
        <div class="col-lg-4">
          <div class="form-group">
            <label for="cepno">Mahalle</label>
            <select  class="form-control" name="mahalle">
              <?php foreach ($mahname as $mahn) {?>
              <option><?php echo $mahn->mahalle_name;?></option>
              <?php }?>  
            </select>
          </div>
        </div> 
      </div>
        <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label for="cepno">Cep No</label>
            <input type="text" class="form-control"  placeholder="cepno" name="cepno">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group" >
           <label for="tcno">T.C. Kimlik No</label>
           <input type="text" class="form-control" name="tcno" placeholder="tc no girin" >
          </div>
        </div>
        <div class="col-lg-4"><!-- Bölge-->
          <div class="form-group">
            <label for="cepno">Bölge</label>
            <select class="form-control" name="bolge">
              <option>Merkez</option>
              <option>Köyler</option>
            </select>
          </div>
        </div><!-- / Bölge -->
      </div>
      <div class="row">      
        <div class="col-lg-4"><!-- Görev-->
          <div class="form-group">
            <label for="cepno">Görev</label>
            <select class="form-control" name="bolge">
              <option>Sandık Görevlisi</option>
              <option>Sandık Başkanı</option>
              <option>Müşahit</option>
            </select>
          </div>
        </div><!-- / Görev -->
        <div class="col-lg-4"><!-- Durum-->
          <div class="form-group">
            <label for="cepno">Durum</label>
            <select class="form-control" name="bolge">
              <option>Asil</option>
              <option>Yedek</option>
            </select>
          </div>
        </div><!-- / Durum -->
         <div class="col-lg-4">
          <div class="form-group" >
           <label for="tcno">Sandık No</label>
           <input type="text" class="form-control" name="sandik_no" placeholder="Sandık No" >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
          <textarea class="form-control" placeholder="Görev yapılacak yerin adresi..." name="sandik_adres"></textarea>
        </div>
      </div>
      </div>
        <div class="row">
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Yeni Görevli Ekle</button>
        </div>
        </div>
      </form>
    </div><!-- .widget-body -->
  </div><!-- .widget -->
</div><!-- END column -->
