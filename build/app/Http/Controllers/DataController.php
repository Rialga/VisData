<?php

namespace App\Http\Controllers;

use App\data_customer;
use App\data_topup;
use App\data_transaksi;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){

        //Gender
        $m = data_customer::where('gender','M')->count();
        $f = data_customer::where('gender','F')->count();
        //Rata Rata Umur
        $usia = data_customer::average('usia');
        $ratausia = ceil($usia);

        //Bulan
        $jan = data_customer::where('tgl_daftar','LIKE','%2018-01%')->count();
        $feb = data_customer::where('tgl_daftar','LIKE','%2018-02%')->count();
        $mar = data_customer::where('tgl_daftar','LIKE','%2018-03%')->count();
        $apr = data_customer::where('tgl_daftar','LIKE','%2018-04%')->count();
        $mei = data_customer::where('tgl_daftar','LIKE','%2018-05%')->count();
        $jun = data_customer::where('tgl_daftar','LIKE','%2018-06%')->count();
        $jul = data_customer::where('tgl_daftar','LIKE','%2018-07%')->count();
        $agu = data_customer::where('tgl_daftar','LIKE','%2018-08%')->count();
        $sep = data_customer::where('tgl_daftar','LIKE','%2018-09%')->count();
        $okt = data_customer::where('tgl_daftar','LIKE','%2018-10%')->count();
        $nov = data_customer::where('tgl_daftar','LIKE','%2018-11%')->count();
        $des = data_customer::where('tgl_daftar','LIKE','%2018-12%')->count();

        //Data Transaksi
        $trans = data_transaksi::where('partner','LIKE','%Transportasi%')->count();
        $depts = data_transaksi::where('partner','LIKE','%Depar%')->count();
        $ecom = data_transaksi::where('partner','LIKE','%E-Commerce%')->count();
        $cafe = data_transaksi::where('partner','LIKE','%Cafe%')->count();
        $franch = data_transaksi::where('partner','LIKE','%Franchise%')->count();
        $etik = data_transaksi::where('partner','LIKE','%E-Ticket%')->count();

        $jtrans = data_transaksi::where('partner','LIKE','%Transportasi%')->sum('jumlah_transaksi');
        $jdepts = data_transaksi::where('partner','LIKE','%Depar%')->sum('jumlah_transaksi');
        $jecom = data_transaksi::where('partner','LIKE','%E-Commerce%')->sum('jumlah_transaksi');
        $jcafe = data_transaksi::where('partner','LIKE','%Cafe%')->sum('jumlah_transaksi');
        $jfranch = data_transaksi::where('partner','LIKE','%Franchise%')->sum('jumlah_transaksi');
        $jetik = data_transaksi::where('partner','LIKE','%E-Ticket%')->sum('jumlah_transaksi');

        //Data Topup
        $atm = data_topup::where('via_topup','LIKE','%ATM%')->count();
        $grab = data_topup::where('via_topup','LIKE','%Grab%')->count();
        $tokped = data_topup::where('via_topup','LIKE','%Tokopedia%')->count();
        $ovobo = data_topup::where('via_topup','LIKE','%Ovo Both%')->count();
        $alfamart = data_topup::where('via_topup','LIKE','%Alfamart%')->count();

        $jatm = data_topup::where('via_topup','LIKE','%ATM%')->sum('jumlah_topup');
        $jgrab = data_topup::where('via_topup','LIKE','%Grab%')->sum('jumlah_topup');
        $jtokped = data_topup::where('via_topup','LIKE','%Tokopedia%')->sum('jumlah_topup');
        $jovobo = data_topup::where('via_topup','LIKE','%Ovo Both%')->sum('jumlah_topup');
        $jalfamart = data_topup::where('via_topup','LIKE','%Alfamart%')->sum('jumlah_topup');

        return view('welcome',compact(
            'jan',$jan, 'feb',$feb, 'mar',$mar, 'apr',$apr, 'mei',$mei, 'jun',$jun, 'jul',$jun, 'agu',$agu, 'sep',$sep, 'okt',$okt, 'nov',$nov, 'des',$des,
                     'm',$m, 'f',$f, 'ratausia',$ratausia,
                     'trans',$trans, 'depts',$depts, 'ecom',$ecom, 'cafe',$cafe, 'franch',$franch, 'etik',$etik,
                     'atm',$atm, 'grab',$grab, 'tokped',$tokped, 'ovobo',$ovobo, 'alfamart',$alfamart
            ))
            ->with('jtrans',$jtrans)
              ->with('jdepts',$jdepts)
              ->with('jecom',$jecom)
              ->with('jcafe',$jcafe)
              ->with('jfranch',$jfranch)
              ->with('jetik',$jetik)
              ->with('jatm',$jatm)
              ->with('jgrab',$jgrab)
              ->with('jtokped',$jtokped)
              ->with('jovobo',$jovobo)
              ->with('jalfamart',$jalfamart);
    }
}
