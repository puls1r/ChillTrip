<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 
 class Simple_login {
 
     // SET SUPER GLOBAL
     var $CI = NULL;
 
     /**
      * Class constructor
      *
      * @return   void
      */
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     /*
     * cek username dan password pada table user, jika ada set session berdasar data user dari
     * table user.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('user',array('username'=>$username,'password' => md5($password)));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar username
             $row  = $this->CI->db->query('SELECT id_user FROM user where username = "'.$username.'"');
             $admin     = $row->row();
             $id   = $admin->id_user;
 
             //set session user
             $this->CI->session->set_userdata('username', $username);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('id', $id);
 
             //redirect ke halaman home
             redirect(site_url('trip'));
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('invalid','Invalid Username or password ');
 
             //redirect ke halaman login
             redirect(site_url('login'));
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session username
         if($this->CI->session->userdata('username') == '') {
 
             //set notifikasi
             $this->CI->session->set_flashdata('belum','Anda harus login terlebih dahulu');
 
             //alihkan ke halaman login
             redirect(site_url('login'));
         }
     }
     public function telah() {
 
        //cek session username
        if($this->CI->session->userdata('username') == '') {
            
            redirect(site_url('login'));
        }
        else{
            $this->CI->session->set_flashdata('sudah','Anda sudah login, silahkan logout untuk mengganti akun');
 
             //alihkan ke halaman login
             redirect(site_url('trip'));
        }
        

        
    }

    public function maap(){
        $this->CI->session->set_flashdata('sry','Mohon maaf menu pembayaran sedang dalam maintenance');
    }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('username');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id');
         $this->CI->session->set_flashdata('sukses','Logout sukses');
         redirect(site_url('login'));
     }

     public function admin_login($username, $password) {
         
        //cek username dan password
        $query = $this->CI->db->get_where('_admin',array('id_admin'=>$username,'pass' => $password));
    
        if($query->num_rows() == 1) {
            //ambil data user berdasar username
            $row  = $this->CI->db->query('SELECT id FROM _admin where id_admin = "'.$username.'"');
            $admin     = $row->row();
            $id   = $admin->id;
    
            //set session user
            $this->CI->session->set_userdata('id_admin', $username);
            $this->CI->session->set_userdata('id_login', uniqid(rand()));
            $this->CI->session->set_userdata('id', $id);
    
            //redirect ke halaman home
            redirect(site_url('admin_home'));
        }else{
    
            //jika tidak ada, set notifikasi dalam flashdata.
            $this->CI->session->set_flashdata('invalid','Invalid Username or password ');
    
            //redirect ke halaman login
            redirect(site_url('admin'));
        }
         return false;
     }
     public function logout_admin() {
        $this->CI->session->unset_userdata('id_admin');
        $this->CI->session->unset_userdata('id_login');
        $this->CI->session->unset_userdata('id');
        $this->CI->session->set_flashdata('sukses','Logout sukses');
        redirect(site_url('login'));
    }
 }

 