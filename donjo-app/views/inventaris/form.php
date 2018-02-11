<style type="text/css">
  table.form th.indent {
    padding-left: 4em;
    white-space: nowrap;
  }
</style>

<div id="pageC">
	<table class="inner">
	<tr style="vertical-align:top">
		<td style="background:#fff;padding:0px;">

<div class="content-header">
</div>
<div id="contentpane">
  <div class="ui-layout-north panel">
    <h3>Form Mutasi Inventaris</h3>
  </div>
  <form id="validasi" action="<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
      <table class="form">
        <tr>
          <th class="nostretch">Tanggal Mutasi</th>
          <td>
            <input name="tanggal_mutasi" type="text" class="inputbox datepicker required" size="20"  value="<?php echo $inventaris['tanggal_mutasi']?>"/>
          </td>
       </tr>
        <tr>
          <th>Jenis Mutasi</th>
          <td>
            <select name="jenis_mutasi" class="required">
              <option value="">Pilih Jenis</option>
              <?php foreach($jenis_mutasi as $id => $nama){?>
                <option value="<?php echo $id?>"<?php if($inventaris['jenis_mutasi']==$id){?> selected<?php }?>><?php echo strtoupper($nama)?></option>
              <?php }?>
            </select>
          </td>
        </tr>
        <tr>
          <th>Keterangan</th>
          <td><input name="keterangan" type="text" class="inputbox" size="100" value="<?php echo $inventaris['keterangan']?>"/></td>
        </tr>
        <tr>
          <th colspan="2">Asal Barang</th>
          </td>
        </tr>
        <tr>
          <th class="indent">Jumlah Dibeli Sendiri</th>
          <td><input name="asal_sendiri" type="text" class="inputbox required" size="10" value="<?php echo $inventaris['asal_sendiri']?>"/></td>
        </tr>
        <tr>
          <th class="indent">Jumlah Bantuan Pemerintah</th>
          <td><input name="asal_pemerintah" type="text" class="inputbox required" size="10" value="<?php echo $inventaris['asal_pemerintah']?>"/></td>
        </tr>
        <tr>
          <th class="indent">Jumlah Bantuan Provinsi</th>
          <td><input name="asal_provinsi" type="text" class="inputbox required" size="10" value="<?php echo $inventaris['asal_provinsi']?>"/></td>
        </tr>
        <tr>
          <th class="indent">Jumlah Bantuan Kabupaten</th>
          <td><input name="asal_kab" type="text" class="inputbox required" size="10" value="<?php echo $inventaris['asal_kab']?>"/></td>
        </tr>
        <tr>
          <th colspan="2">Jenis Penghapusan</th>
        </tr>
        <tr>
          <th class="indent">Jumlah Rusak</th>
          <td><input name="hapus_rusak" type="text" class="inputbox required" size="10" value="<?php echo $inventaris['hapus_rusak']?>"/></td>
        </tr>
        <tr>
          <th class="indent">Jumlah Dijual</th>
          <td><input name="hapus_dijual" type="text" class="inputbox required" size="10" value="<?php echo $inventaris['hapus_dijual']?>"/></td>
        </tr>
        <tr>
          <th class="indent">Jumlah Disumbangkan</th>
          <td><input name="hapus_sumbangkan" type="text" class="inputbox required" size="10" value="<?php echo $inventaris['hapus_sumbangkan']?>"/></td>
        </tr>
      </table>
    </div>

    <div class="ui-layout-south panel bottom">
      <div class="left">
        <a href="<?php echo site_url().$this->controller.'/index/'?>" class="uibutton icon prev">Kembali</a>
      </div>
      <div class="right">
        <div class="uibutton-group">
          <button class="uibutton" type="reset"><span class="fa fa-refresh"></span> Bersihkan</button>
          <button class="uibutton confirm" type="submit" ><span class="fa fa-save"></span> Simpan</button>
        </div>
      </div>
    </div>
  </form>
</div>
</td></tr></table>
</div>
