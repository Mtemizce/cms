<div class="row">
  <div class="col-md-12">
    <div class="widget widget-pie-chart">
      <header class="widget-header">
        <div class="col-md-10">
          <h4 class="widget-title">Seçim için görevli listesi. İster arama kutusundan isterseniz tablo başındaki filtreleri kullanarak görevli ve yerleri hakkında detaylı bilgiyi inceleyebilirsiniz.</h4>
        </div>
        <div class="col-md-2 text-right">
          <a href="<?php echo base_url("GorevliList/gorevliEkle"); ?>" type="button" class="btn btn-xs btn-success"><i class="fa fa-envelope"></i> Görevli Ekle</a>
        </div>
      </header>
      <!-- Görevlilerin Listesi -->
      <!--<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td> -->              
      <!-- DOM dataTable -->
      <hr class="widget-separator">
      <div class="widget-body">
        <div class="table-responsive">
          <table id="default-datatable" data-plugin="DataTable" class="table table-striped table-hover " cellspacing="0" width="100%">
            <thead>
              <tr>
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
              <tr>
                <td>Mehmet Temizce</td>
                <td>Merkez</td>
                <td>Kemaliye Mah.</td>
                <td>Hendek Anadolu Lisesi</td>
                <td>3</td>
                <td>+90 545 544 90 88</td>
                <td>279********</td>
                <td>Asil</td>
                <td><a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a></td>
              </tr>
              <tr>
                <td>Serkan Şenler</td>
                <td>Köyler</td>
                <td>Akova Mah.</td>
                <td>Hendek Tekn. ve End. Lisesi</td>
                <td>29</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Asil</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
              <tr>
                <td>Gökhan Uzun</td>
                <td>Köyler</td>
                <td>Çağlayan Mah.</td>
                <td>Merkez Camii</td>
                <td>15</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Yedek</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>                   
              <tr>
                <td>Süleyman Kalk</td>
                <td>Köyler</td>
                <td>Pınarlı Mah.</td>
                <td>Pınarlı Camii</td>
                <td>7</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Asil</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
              <tr>
                <td>Sıtkı Yaz</td>
                <td>Köyler</td>
                <td>Çamlıca Mah.</td>
                <td>Eski Beld. Binası</td>
                <td>24</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Asil</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
              <tr>
                <td>Mevlüt Örnek</td>
                <td>Köyler</td>
                <td>Hanım Köylü</td>
                <td>Gtirmediği Çay Ocağı</td>
                <td>31</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Asil</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr> 
              <tr>
                <td>Mert Temizce</td>
                <td>Köyler</td>
                <td>İkbaliye Mah.</td>
                <td>Merkezi Camii</td>
                <td>11</td>
                <td>+90 542 292 62 92</td>
                <td>2**********</td>
                <td>Asil</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
              <tr>
                <td>Ahmet İnan</td>
                <td>Merkez</td>
                <td>Yeni Mah.</td>
                <td>Gaffar Okkan İ.Ö.O</td>
                <td>35</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Asil</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
              <tr>
                <td>Tarık Temizce</td>
                <td>Köyler</td>
                <td>İkbaliye Mah.</td>
                <td>Merkez Camii</td>
                <td>11</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Yedek</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
              <tr>
                <td>Oğuzhan Efe Keleş</td>
                <td>Köyler</td>
                <td>Kahraman Mah.</td>
                <td>Köy Camii</td>
                <td>52</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Asil</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
              <tr>
                <td>Uğur Kahveci</td>
                <td>Köyler</td>
                <td>Sivritepe Mah.</td>
                <td>Köy Camii</td>
                <td>52.5</td>
                <td>+90 5** *** ** **</td>
                <td>***********</td>
                <td>Yedek</td>
                <td>
                  <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-envelope"></i> Sil</a>
                  <a href="#" class="btn btn-info btn-xs btn-outline"><i class="fa fa-edit"></i> Düzenle</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div><!-- .widget-body -->

      
    </div>
  </div>
</div><!-- .row -->