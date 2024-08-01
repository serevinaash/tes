<?php

namespace App\Models;

class FrontModel extends \App\Models\MstModel
{
	protected $mauth = null;

	public function __construct()
    {
        parent::__construct();
        $this->mauth = new \IonAuth\Models\IonAuthModel();
    }

    function getListsInspeksiCaraCepat($id = null, $createdBy = null,$roleId = null, $balaiId = null)
    {
		$builder = $this->db->table("trx_inspeksi_cara_cepat ti");
        $builder->select("ti.no_inspeksi, ti.tgl_inspeksi, ti.nomor_ruas_jalan, ti.nama_ruas_jalan, ti.id id_inspeksi
        , rps.posisi_survei
        , ROUND(ti.inspeksi_nilai_indeks) inspeksi_nilai_indeks, ti.petugas_inspeksi
        , rk.nama_kondisi, COALESCE(rk.jenis_pemeliharaan,'') jenis_pemeliharaan
        , tidet.dari, tidet.ke, ROUND(tidet.nilai_ikd) nilai_ikd
        , tidet.longitude, tidet.latitude, tidet.id id_det, tidet.catatan, ti.cuaca, ti.sta_km, ti.arah_pengukuran");
        $builder->join("trx_inspeksi_cara_cepat_det tidet", "ti.id = tidet.id_inspeksi", "inner");
        $builder->join("ref_kondisi rk", "ROUND(tidet.nilai_ikd) = rk.id", "left");
        $builder->join("ref_posisi_survei rps", "CAST(ti.posisi_survei AS INT) = rps.id", "left");
        $builder->where('ti.deleted_at IS NULL AND ti.inspeksi_nilai_indeks IS NOT NULL');
        //$builder->where('ti.status_verif_id', '1');

        if (!empty($createdBy) && $roleId == 3) {
            $builder->where('ti.created_by', $createdBy);
        }

        if (!empty($balaiId)) {
            $builder->where('ti.id_balai', $balaiId);
        }

        $data = $builder->get()->getResult();
        return $data;
    }

    function getListsDetSegment($idDet = null){
       $builder = $this->db->table("trx_inspeksi_cara_cepat_det_segmen ti");
       $builder->select(' ti.inspeksi_detail_id, ti.komponen_id, ti.komponen_kesesuaian, ti.komponen_keberadaan, ti.komponen_fungsi, ti.komponen_index, ti.komponen_catatan ,sfile.file_name  komponenFilename');
        $builder->join("_files sfile", "ti.komponen_file_id = sfile.id", "left");
        $builder->where('ti.inspeksi_detail_id', $idDet);
        $data = $builder->get()->getResult();
        return $data;
    }

    function getListsInspeksiCaraCepatline($createdBy, $roleId, $balaiId = null)
    {
        $builder = $this->db->table("trx_inspeksi_cara_cepat ti");
        $builder->select('ti.no_inspeksi, ti.tgl_inspeksi, ti.nomor_ruas_jalan, ti.nama_ruas_jalan, ti.id id_inspeksi');
        $builder->where('ti.deleted_at IS NULL AND ti.inspeksi_nilai_indeks IS NOT NULL');
       // $builder->where('ti.status_verif_id', '1');

        if (!empty($createdBy) && $roleId == 3) {
            $builder->where('ti.created_by', $createdBy);
        }

        if (!empty($balaiId)) {
            $builder->where('ti.id_balai', $balaiId);
        }

        $data = $builder->get()->getResult();
        return $data;
    }

    function getListsInspeksiCaraCepatSegment()
    {
        $builder = $this->db->table("trx_inspeksi_cara_cepat_det ti");
        $builder->select('*');
        $data = $builder->get()->getResult();
        return $data;
    }
    function getBalai()
    {
        $builder = $this->db->table("ref_balai");
        $builder->select("id, nama_balai"); // Sesuaikan dengan kolom yang ada di tabel balai
        $builder->where('active', 1);
        $builder->where('deleted_at', NULL);

        $this->_data = $builder->get()->getResult();
        return $this->_data;
    }
}
