<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cargo extends Model{
    protected $table      = 'psg_cargo';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primaryKey='id';
    protected $allowedFields=['nombres','apellidos','carnet','celular','correo','motivacion','cargo'];
    
}