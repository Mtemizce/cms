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
      <form action="<?php echo base_url("gorevliList/kaydet"); ?>" method="post">
        <div class="row">
        <div class="col-lg-4">
          <div class="form-group has-info">
            <label for="isim" class="control-label">İsim</label>
            <input type="text" class="form-control" id="isim" placeholder="İsim..." name="isim" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group" >
            <label for="soyisim">Soyisim</label>
            <input type="text" class="form-control" id="soyisim" placeholder="Soyisim..." name="soyisim" required>
          </div>
        </div> 
        <div class="col-lg-4">
          <div class="form-group">
            <label>Mahalle</label>
            <select class="form-control" name="mahalle">
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
            <input type="number" class="form-control" id="cepno" placeholder="İletişim Numarası..." name="cepno" required>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group" >
           <label for="tcno">T.C. Kimlik No</label>
           <input type="number" class="form-control" id="tcno" name="tcno" placeholder="T.C Kimlik Numarası..." required>
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
            <select class="form-control" name="gorev">
              <option>Sandık Görevlisi</option>
              <option>Sandık Başkanı</option>
              <option>Müşahit</option>
            </select>
          </div>
        </div><!-- / Görev -->
        <div class="col-lg-4"><!-- Durum-->
          <div class="form-group">
            <label for="cepno">Durum</label>
            <select class="form-control" name="durum">
              <option>Asil</option>
              <option>Yedek</option>
            </select>
          </div>
        </div><!-- / Durum -->
         <div class="col-lg-4">
          <div class="form-group" >
           <label for="sandikno">Sandık No</label>
           <input type="number" id="sandikno" class="form-control has-feedback" name="sandikno" placeholder="Sandık Numarası..." required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
        <div class="form-group">
          <label for="adres">Adres</label>
          <textarea class="form-control" id="adres" placeholder="Görev yapılacak yerin adresi..." name="sandikadres" required></textarea>
        </div>
      </div>
      </div>
        <div class="row">
        <div class="col-lg-12 text-center">
          <a href="<?php echo base_url("GorevliList") ?>" class="btn btn-danger btn-md"><i class="fa fa-reply"></i> Geri dön</a>
          <button type="submit" class="btn btn-success btn-md"><i class="fa fa-plus"></i> Yeni Görevli Ekle</button>
        </div>
        </div>
      </form>
    </div><!-- .widget-body -->
  </div><!-- .widget -->
</div><!-- END column -->
