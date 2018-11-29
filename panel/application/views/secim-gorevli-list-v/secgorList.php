<!-- DOM dataTable -->
<hr class="widget-separator">
<div class="widget-body">
	<div class="table-responsive">
		<table id="default-datatable" data-plugin="DataTable" class="table table-striped table-hover table-responsive" cellspacing="0" width="100%">
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
					<th>Görev Durumu</th>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" unchecked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" unchecked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-color="#10c469" data-size="small"  checked /></td>
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
					<td><input id="switch-2-2" type="checkbox" data-switchery data-size="small" data-color="#10c469" unchecked /></td>
				</tr>
			</tbody>
		</table>
		<a href="<?php echo base_url("GorevliList/gorevliEkle"); ?>" type="button" class="btn btn-xs btn-success"><i class="fa fa-envelope"></i> Görevli Ekle</a>
	</div>
</div><!-- .widget-body -->
