<div class="col-md-12" >
  <header class="widget-header">
      <div class="col-lg-6">
        <h4 class="widget-title">Seçim Görevlileri - Sandık Başkanları - Müşahitler</h4>
      </div>
      <div class="col-lg-6">
         <a href="<?php echo base_url("GorevliList/gorevliEkle"); ?>" type="button" class="pull-right btn btn-xs btn-success btn-outline"><i class="fa fa-plus"></i> Görevli Ekle</a>
      </div>
    </header><!-- .widget-header -->
  <div class="widget p-lg">
          <div class="alert alert-info text-center">
            <h4><b>Tablodaki bilgiler hakkında!</b></h5>
            <p>Silmek yada düzenlemek istediğiniz kayıtlar için lütfen birim yöneticinizin onayını alınız. İlgili bilgiler sistemin düzgün çalışması açısından çok kritiktir.</p>
          </div>
    <div class="table-responsive clearfix">
      <table id="default-datatable" data-plugin="DataTable" class="table table-bordered table-hover table-striped table-responsive">
        <thead>
          <tr class="info text-color">
            <th>#ID</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Görev</th>
            <th>Bölge</th>
            <th>Mahalle</th>
            <th>Sandık Adrs.</th>
            <th>Sandık No</th>
            <th>Tel. No</th>
            <th>T.C. No</th>
            <th>Durum</th>
            <th>İşlem</th>
          </tr>
        </thead>
        <tbody>
          <?php $this->load->view("{$viewFolder}/{$subViewFolder}/list"); ?>
        </tbody>   
        <tfoot>
         <tr class="info text-color">
        <th>#ID</th>
        <th>İsim</th>
        <th>Soyisim</th>
        <th>Görev</th>
        <th>Bölge</th>
        <th>Mahalle</th>
        <th>Sandık Adrs.</th>
        <th>Sandık No</th>
        <th>Tel. No</th>
        <th>T.C. No</th>
        <th>Durum</th>
        <th>İşlem</th>
      </tr>
    </tfoot>  
      </table>
    </div>
  </div><!-- .widget -->
      </div><!-- END column -->