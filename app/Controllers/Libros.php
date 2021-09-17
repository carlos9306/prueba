<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\libro;

class Libros extends Controller{

  public function index(){

    // $datos['libros']= $this->Libro->getLibros();
    // $this->load->view("libros/listar", $datos);

    $libro= new Libro();
    // $datos["libros"]= $libro->orderBy("id","ASC")->findAll();
    $datos["libros"] = $libro->orderBy("id","ASC")->findAll();
    // $datos["libros"] = $libro->get('libros');
      return view("libros/listar",$datos);

}

    
}