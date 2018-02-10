<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_model extends CI_Model {
	function select_gedung(){
		return $this->db->where('kategori_barang','Avenue')
						->get('barang')
						->result();
	}
	function select_undangan(){
		return $this->db->where('kategori_barang','Undangan')
						->get('barang')
						->result();
	}
	function select_dekor(){
		return $this->db->where('kategori_barang','Dekorasi')
						->get('barang')
						->result();
	}
	function select_mc(){
		return $this->db->where('kategori_barang','MC')
						->get('barang')
						->result();
	}
	function select_support(){
		return $this->db->where('kategori_barang','Support')
						->get('barang')
						->result();
	}
	function select_photographer(){
		return $this->db->where('kategori_barang','Photographer')
						->get('barang')
						->result();
	}
	function select_catering(){
		return $this->db->where('kategori_barang','Catering')
						->get('barang')
						->result();
	}
	function select_platinum(){
		return $this->db->where('kategori_barang','PlatinumGedung')
						->get('barang')
						->result();
	}
	function select_platinum1(){
		return $this->db->where('kategori_barang','PlatinumUndangan')
						->get('barang')
						->result();
	}
	function select_platinum2(){
		return $this->db->where('kategori_barang','PlatinumDekor')
						->get('barang')
						->result();
	}
	function select_platinum3(){
		return $this->db->where('kategori_barang','PlatinumMC')
						->get('barang')
						->result();
	}
	function select_platinum4(){
		return $this->db->where('kategori_barang','PlatinumSupport')
						->get('barang')
						->result();
	}
	function select_platinum5(){
		return $this->db->where('kategori_barang','PlatinumPhotographer')
						->get('barang')
						->result();
	}
	function select_platinum6(){
		return $this->db->where('kategori_barang','PlatinumCatering')
						->get('barang')
						->result();
	}
	function select_gold(){
		return $this->db->where('kategori_barang','Gold')
						->get('barang')
						->result();
	}
	function select_silver(){
		return $this->db->where('kategori_barang','Silver')
						->get('barang')
						->result();
	}
	public function get_detail_avenue($id_avenue)
	{
		return $this->db->where('id_barang',$id_avenue)
						->get('barang')
						->row();	
	}
	 	public function get_detail_dekorasi($id_dekor){
	 	return $this->db->where('id_barang',$id_dekor)
	 					->get('barang')
	 					->row();
	 }
		public function get_detail_undangan($id_undangan){
	 	return $this->db->where('id_barang', $id_undangan)
	 					->get('barang')
	 					->row();
	 }
	 	public function get_detail_mc($id_mc){
	 		return $this->db->where('id_barang', $id_mc)
	 					->get('barang')
	 					->row();
	 }
	 public function get_detail_support($id_support){
	 		return $this->db->where('id_barang', $id_support)
	 					->get('barang')
	 					->row();
	 }
	 public function get_detail_photographer($id_photographer){
	 		return $this->db->where('id_barang', $id_photographer)
	 					->get('barang')
	 					->row();
	 }
	 public function get_detail_catering($id_catering){
	 		return $this->db->where('id_barang', $id_catering)
	 					->get('barang')
	 					->row();
	 }
	 public function get_detail_platinum($id_platinum){
	 		return $this->db->where('id_barang', $id_platinum)
	 					->get('barang')
	 					->row();
	 }
	 	
}