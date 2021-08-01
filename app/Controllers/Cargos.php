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
    public function crear($x=null){
    
        $datos=[
            'nombres'=>$this->request->getVar('nombres'),
            'apellidos'=>$this->request->getVar('apellidos'),
            'carnet'=>$this->request->getVar('carnet'),
            'celular'=>$this->request->getVar('celular'),
            'correo'=>$this->request->getVar('correo'),
            'motivacion'=>$this->request->getVar('motivacion'),
            'cargor'=>$x
        ];
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('postulacion',$datos);


    }
    public function guardar(){

        $cargo=new Cargo();
        //VALIDACION

        $validacion=$this->validate([
            'nombres'=>'required|min_length[3]',
            'apellidos'=>'required|min_length[3]',
            'carnet'=>'required|numeric|min_length[6]',
            'celular'=>'required|numeric|min_length[8]',
            'correo'=>'required|valid_email',
            'motivacion'=>'required|min_length[5]'
        ]);
        if(!$validacion){
            $session=session();
            $session->setFlashdata('mensaje','Revise los datos requeridos');
            return redirect()->back()->withInput();
            
        }

        $datos=[
            'nombres'=>$this->request->getVar('nombres'),
            'apellidos'=>$this->request->getVar('apellidos'),
            'carnet'=>$this->request->getVar('carnet'),
            'celular'=>$this->request->getVar('celular'),
            'correo'=>$this->request->getVar('correo'),
            'motivacion'=>$this->request->getVar('motivacion'),
            'cargo'=>$this->request->getVar('cargo'),
        ];
        
        $cargo->insert($datos);
        

        return $this->response->redirect(site_url('/lista'));
    }
    public function borrar($id=null){
        $cargo=new Cargo();

        $cargo->where('id',$id)->delete($id);

        return $this->response->redirect(site_url('/lista'));

        echo "borrar resigts".$id;
    }
    public function editar($id=null){
        
        $cargo=new Cargo();

        $datos['cargo']=$cargo->where('id',$id)->first();

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('editar',$datos);

    }
    public function actualizar($id=null){
        
        $cargo=new Cargo();

        $datos=[
            'nombres'=>$this->request->getVar('nombres'),
            'apellidos'=>$this->request->getVar('apellidos'),
            'carnet'=>$this->request->getVar('carnet'),
            'celular'=>$this->request->getVar('celular'),
            'correo'=>$this->request->getVar('correo'),
            'motivacion'=>$this->request->getVar('motivacion'),
            'cargor'=>$this->request->getVar('cargo')
        ];

        $id=$this->request->getVar('id');


        //VALIDACION

        $validacion=$this->validate([
            'nombres'=>'required|min_length[3]',
            'apellidos'=>'required|min_length[3]',
            'carnet'=>'required|numeric|min_length[6]',
            'celular'=>'required|numeric|min_length[8]',
            'correo'=>'required|valid_email',
            'motivacion'=>'required|min_length[5]'
        ]);
        if(!$validacion){
            $session=session();
            $session->setFlashdata('mensaje','Revise los datos requeridos');
            return redirect()->back()->withInput();
            
        }

        $cargo->update($id,$datos);
        return $this->response->redirect(site_url('/lista'));
    }
    
}