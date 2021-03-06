<?php
/**
 * Created by PhpStorm.
 * User: RendiArca
 * Date: 28/12/2017
 * Time: 11.03
 */

namespace App\Models\Backend;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MasterWilayah extends Model
{
    protected $provinsi = 'master_provinsi';
    protected $kota = 'master_kota';
    protected $kelurahan = 'master_kelurahan';
    protected $kecamatan = 'master_kecamatan';

    protected $primaryProvinsi = 'master_provinsi';
    protected $primaryKota = 'master_kota';
    protected $primaryKelurahan = 'master_kelurahan';
    protected $primaryKecamatan = 'master_kecamatan';

    public $timestamps = false;

    public static function provinsi()
    {
        return DB::table('master_provinsi')
            ->select(DB::raw('*'))
            ->where('provinsi_status',1)
            ->where('provinsi_log_id')
            ->orderBy('provinsi_id', 'ASC');
    }

    public static function kota()
    {
        return DB::table('master_kota')
            ->select(DB::raw('*'))
            ->where('kota_status',1)
            ->where('kota_log_id')
            ->orderBy('kota_id', 'ASC');
    }

    public static function kecamatan()
    {
        return DB::table('master_kecamatan')
            ->select(DB::raw('*'))
            ->where('kecamatan_status',1)
            ->where('kecamatan_log_id')
            ->orderBy('kecamatan_id', 'ASC');
    }

    public static function kelurahan()
    {
        return DB::table('master_kelurahan')
            ->select(DB::raw('*'))
            ->where('kelurahan_status',1)
            ->where('kelurahan_log_id')
            ->orderBy('kelurahan_id', 'ASC');
    }

    public static function provinsiByKode($id)
    {
        return DB::table('master_provinsi')
            ->select(DB::raw('*'))
            ->where('provinsi_kode',$id)
            ->where('provinsi_status',1)
            ->where('provinsi_log_id')
            ->orderBy('provinsi_id', 'ASC');
    }

    public static function kotaByKode($id)
    {
        return DB::table('master_kota')
//            ->select(DB::raw('*'))
            ->where('kota_provinsi_kode',$id)
            ->where('kota_status',1)
            ->where('kota_log_id')
            ->orderBy('kota_id', 'ASC');
    }

    public static function kecamatanByKode($id)
    {
        return DB::table('master_kecamatan')
            ->select(DB::raw('*'))
            ->where('kecamatan_kota_kode',$id)
            ->where('kecamatan_status',1)
            ->where('kecamatan_log_id')
            ->orderBy('kecamatan_id', 'ASC');
    }

    public static function kelurahanByKode($id)
    {
        return DB::table('master_kelurahan')
            ->select(DB::raw('*'))
            ->where('kelurahan_kecamatan_kode',$id)
            ->where('kelurahan_status',1)
            ->where('kelurahan_log_id')
            ->orderBy('kelurahan_id', 'ASC');
    }
}