<?php class Inventaris_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function autocomplete(){
		$data = $this->db->select('nama')->order_by('nama')->get('jenis_barang')->result_array();
		$outp='';
		for($i=0; $i<count($data); $i++){
			$outp .= ',"'.$data[$i]['nama'].'"';
		}
		$outp = substr($outp, 1);
		$outp = '[' .$outp. ']';
		return $outp;
	}

	function get_jenis($id=0){
		$hasil = $this->db->where('id',$id)->get('jenis_barang')->row_array();
		return $hasil;
	}

	function paging_jenis($p=1,$o=0){
		$list_data_sql = $this->list_jenis_sql();
		$sql = "SELECT COUNT(*) AS jml ".$list_data_sql;
		$query    = $this->db->query($sql);
		$row      = $query->row_array();
		$jml_data = $row['jml'];

		$this->load->library('paging');
		$cfg['page']     = $p;
		$cfg['per_page'] = $_SESSION['per_page'];
		$cfg['num_rows'] = $jml_data;
		$this->paging->init($cfg);
		return $this->paging;
	}

	// Digunakan untuk paging dan query utama supaya jumlah data selalu sama
	private function list_jenis_sql() {
		$sql = "
			FROM jenis_barang j
			WHERE 1 ";
		$sql .= $this->search_sql();
		return $sql;
	}

	function list_jenis($o=0,$offset=0,$limit=500){
		$select_sql = "SELECT *
			";
		//Main Query
		$list_data_sql = $this->list_jenis_sql();
		$sql = $select_sql." ".$list_data_sql;

		//Ordering SQL
		switch($o){
			case 1: $order_sql = ' ORDER BY j.nama'; break;
			case 2: $order_sql = ' ORDER BY j.nama DESC'; break;
			default:$order_sql = '';
		}

		//Paging SQL
		$paging_sql = ' LIMIT ' .$offset. ',' .$limit;

		$sql .= $order_sql;
		$sql .= $paging_sql;

		$query = $this->db->query($sql);
		$data=$query->result_array();

		return $data;
	}

	function insert_jenis(){
		$data = $_POST;
		$outp = $this->db->insert('jenis_barang',$data);
		if(!$outp) session_error(); else session_success();
	}

	function update_jenis($id=''){
	  $data = $_POST;
		$outp = $this->db->where('id',$id)->update('jenis_barang',$data);
		if(!$outp) session_error(); else session_success();
	}

	function delete_jenis($id=''){
		$outp = $this->db->where('id',$id)->delete('jenis_barang');
		if(!$outp) session_error(); else session_success();
	}

// ===============

	function get_inventaris($id=0){
		$hasil = $this->db->where('id',$id)->get('inventaris')->row_array();
		return $hasil;
	}

	function search_sql(){
		if(isset($_SESSION['cari'])){
			$cari = $_SESSION['cari'];
			$kw = $this->db->escape_like_str($cari);
			$kw = '%' .$kw. '%';
			$search_sql= " AND (i.keterangan LIKE '$kw')";
			return $search_sql;
		}
	}

	function paging($p=1,$o=0){
		$list_data_sql = $this->list_data_sql();
		$sql = "SELECT COUNT(*) AS jml ".$list_data_sql;
		$query    = $this->db->query($sql);
		$row      = $query->row_array();
		$jml_data = $row['jml'];

		$this->load->library('paging');
		$cfg['page']     = $p;
		$cfg['per_page'] = $_SESSION['per_page'];
		$cfg['num_rows'] = $jml_data;
		$this->paging->init($cfg);
		return $this->paging;
	}

	// Digunakan untuk paging dan query utama supaya jumlah data selalu sama
	private function list_data_sql() {
		$sql = "
			FROM inventaris i
			WHERE 1 ";
		$sql .= $this->search_sql();
		return $sql;
	}

	function list_data($id_jenis=0,$o=0,$offset=0,$limit=500){
		$select_sql = "SELECT *
			";
		//Main Query
		$list_data_sql = $this->list_data_sql($log);
		$sql = $select_sql." ".$list_data_sql;

		//Ordering SQL
		switch($o){
			case 1: $order_sql = ' ORDER BY i.tanggal_mutasi'; break;
			case 2: $order_sql = ' ORDER BY i.tanggal_mutasi DESC'; break;
			default:$order_sql = '';
		}

		//Paging SQL
		$paging_sql = ' LIMIT ' .$offset. ',' .$limit;

		$sql .= $order_sql;
		$sql .= $paging_sql;

		$query = $this->db->query($sql);
		$data=$query->result_array();

		return $data;
	}

	function insert(){
		$data = $_POST;
		$outp = $this->db->insert('inventaris',$data);
		if(!$outp) session_error(); else session_success();
	}

	function update($id=''){
	  $data = $_POST;
		$outp = $this->db->where('id',$id)->update('inventaris',$data);
		if(!$outp) session_error(); else session_success();
	}

	function delete($id=''){
		$outp = $this->db->where('id',$id)->delete('inventaris');
		return $outp;
	}

	function delete_all(){
		session_success();
		$id_cb = $_POST['id_cb'];
		if(count($id_cb)){
			foreach($id_cb as $id){
				$outp = $this->delete($id);
				if (!$outp) session_error();
			}
		}
	}

}