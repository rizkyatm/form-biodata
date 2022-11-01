<?php
   class Biodata{
    public $nama = '';
    public $kelas ='';
    public $sekolah ='';
    public $jurusan ='';

    protected $jkl='';
    protected $alamat='';
    protected $nohp='';
    protected $email='';
    
    
    public function nama(){
        $this->nama=$_POST['namalengkap'];
        return $this->nama;
    }

    public function kelas(){
        $this->kelas=$_POST['namakelas'];
        return $this->kelas;
    }

    public function sklh(){
        $this->sekolah=$_POST['namasekolah'];
        return $this->sekolah;
    }

    public function jrsn(){
        $this->jurusan=$_POST['namajurusan'];
        return $this->jurusan;
    }


    public function jnkl(){
        $this->jkl=$_POST['namajkl'];
        return $this->jkl;
    }

    public function almt(){
        $this->alamat=$_POST['namaalamat'];
        return $this->alamat;
    }

    public function nhp(){
        $this->nohp=$_POST['telp'];
        return $this->nohp;
    }

    public function emaill(){
        $this->email=$_POST['namaemail'];
        return $this->email;
    }



   }
?>