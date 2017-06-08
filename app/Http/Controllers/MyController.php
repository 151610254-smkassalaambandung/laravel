<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function percobaan()
    {
    	$a = "rully";
    	return "Nama saya Adalah ".$a;
    }
    //passing data view
    public function percobaan2()
    {
    	return view('about');
    }
    //passing data variable to view
    public function percobaan3()
    {
    	$a = "Rully Surya Permana";
    	return view('latihan.saya', compact('a'));
    }
    //passing data variable to view
    public function percobaan4()
    {
    	$a = "Rully Surya Permana";
    	$b = "XI RPL 3";
    	$c = "SMK Assalam";
    	return view('sekolah.ini', compact('a','b','c'));
    }
    

    public function percobaan5()
    {
    	$a = 1;
    	$b = 2;
    	$c = 3;
    	return view('seleksi', compact('a','b','c'));
    }

    public function percobaan6()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	$mahlukhidup = ['Manusia','hewan','tumbuhan','alien','burung'];
    	$komputer = ['key board','mouse','cpu','monitor','ram'];
    	return view('buah', compact('buah'.'mahlukhidup'.'komputer'));
    }

    public function param($a)
    {
    	$a="buah";
    	return $a;
    }	
}
