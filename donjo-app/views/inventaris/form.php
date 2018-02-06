<div id="pageC">
	<table class="inner">
	<tr style="vertical-align:top">
		<td style="background:#fff;padding:0px;">

<div class="content-header">
</div>
<div id="contentpane">
  <div class="ui-layout-north panel">
    <h3>Form Manajeman Inventaris</h3>
  </div>
  <form id="validasi" action="<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
      <table class="form">
        <tr>
          <th>Jenis Barang</th>
          <td><input name="jenis" type="text" class="inputbox" size="40" value="<?php echo $inventaris['jenis']?>"/></td>
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
