<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cargo;
class Cargos extends Controller{

    public function index(){
        $cargo=new Cargo();
        $datos['cargos']=$cargo->orderBy('id','ASC')->findAll();
        return view('lista',$datos);
    }

}