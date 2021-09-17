<?php 
namespace App\Models;

use CodeIgniter\Model;

class Libro extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowed= ["nombre","imagen"];

    //  function getLibros()
    //  {
    //     $query = $this->db->get('libros');
    //     if($query->num_rows()>0)
    //         return $query;
    //     else
    //         return false;
    //  }

 }