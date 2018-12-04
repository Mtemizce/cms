<?php foreach ($gorevli as $gorev) {?>
  <tr>
    <td>#<?php echo $gorev->id;?></td>
    <td><?php echo $gorev->isim;?></td>
    <td><?php echo $gorev->soyisim;?></td>
    <td><?php echo $gorev->gorev;?></td>
    <td><?php echo $gorev->bolge;?></td>
    <td><?php echo $gorev->mahalle_id;?></td>
    <td><?php echo $gorev->adres;?></td>
    <td><?php echo $gorev->sandik_no;?></td>
    <td><?php echo $gorev->tel_no;?></td>
    <td><?php echo $gorev->tc_no;?></td>
    <td class="text-center"><?php 
          echo ($gorev->durum == "Asil") ? "<span class='text-success'><b>Asil</b></span>" : "<span class='text-danger'><b>Yedek</b></span>";
        ?>
    </td>
    <td>
      <a href="#" class="btn btn-danger btn-xs btn-outline"><i class="fa fa-trash"></i> Sil</a>
      <a href="<?php echo base_url("GorevliList/Duzenle/$gorev->id");?>" class="btn btn-info btn-xs btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
    </td>
  </tr>

  <?php }?> 
