<div class="col-md-12" >
  <header class="widget-header">
      <div class="col-lg-6">
        <h4 class="widget-title">Seçim Görevlileri - Sandık Başkanları - Müşahitler</h4>
      </div>
      <div class="col-lg-6 ">
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
        <th>İsim - Soyisim</th>
        <th>Bölge</th>
        <th>Mahalle</th>
        <th>Sandık Adrs.</th>
        <th>Sandık No</th>
        <th>Tel. No</th>
        <th>T.C. No</th>
        <th>Sıra</th>
        <th>İşlem</th>
      </tr>
       </thead>
      <tbody>
        <?php foreach ($gorevli as $gorevl) {?>
          <tr>
          <td><?php echo $gorevl->isim ." ". $gorevl->soyisim;?></td>
          <td><?php echo $gorevl->bolge;?></td>
          <td><?php echo $gorevl->mahalle_id;?></td>
          <td><?php echo $gorevl->adres;?></td>
          <td><?php echo $gorevl->sandik_no;?></td>
          <td><?php echo $gorevl->tel_no;?></td>
          <td><?php echo $gorevl->tc_no;?></td>
          <td><?php echo $gorevl->sira;?></td>
          <td>
            <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
            <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
          </td>
        </tr>
       <?php }?>
          
        </tbody>   
        <tfoot>
         <tr class="info text-color">
        <th>İsim - Soyisim</th>
        <th>Bölge</th>
        <th>Mahalle</th>
        <th>Sandık Adrs.</th>
        <th>Sandık No</th>
        <th>Tel. No</th>
        <th>T.C. No</th>
        <th>Sıra</th>
        <th>İşlem</th>
      </tr>
    </tfoot>  
      </table>
    </div>
  </div><!-- .widget -->
      </div><!-- END column -->