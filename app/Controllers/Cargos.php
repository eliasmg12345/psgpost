<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cargo;
class Cargos extends Controller{

    public function index(){
        $cargo=new Cargo();
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');
        return view('seleccion',$datos);
    }
    
    
    public function lista(){
        $cargo=new Cargo();
        $datos['cargos']=$cargo->orderBy('id','ASC')->findAll();
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');
        return view('lista',$datos);
    }
    public function crear(){
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');
        return view('postulacion',$datos);
    }
    public function guardar(){

        $cargo=new Cargo();

        
        // if($correo=$this->request->getText('correo')){
        //     $nuevocorreo=$correo->getRandomName();
        //     $correo->move('');
        // }
        $datos=[
            'nombres'=>$this->request->getVar('nombres'),
            'apellidos'=>$this->request->getVar('apellidos'),
            'carnet'=>$this->request->getVar('carnet'),
            'celular'=>$this->request->getVar('celular'),
            'correo'=>$this->request->getVar('correo'),
            'motivacion'=>$this->request->getVar('motivacion'),
            'cargo'=>$this->request->getVar('cargo')
        ];
        
        $cargo->insert($datos);
        

        $datoss['cabecera']=view('template/cabecera');
        $datoss['pie']=view('template/piepagina');
        return view('seleccion',$datoss);
    }
}