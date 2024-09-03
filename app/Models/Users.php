<?php namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['Nom', 'Prenom','CIN','Adresse','Telephone','Email','Mdp','Solde'];
    
}
?>