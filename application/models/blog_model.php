<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_Model extends MY_Model{ 
    public function __construct() {
        parent::__construct();        
    }
    
    public function getblog(){
        $qry=$this->db->select('TITLE,ID,DESCRIPTION,AUTHOR')
                        ->get("BLOG");
        $res=$qry->result_array();
       return $res;                        
    }
    public function insertBlog($data=null){       
        $qry=$this->db->insert("BLOG",$data);        
        return $qry;        
    }
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

