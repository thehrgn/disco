<?php namespace App\Models;

use CodeIgniter\Model;

class GenresModel extends Model
{
    protected $table = 'genres';
    protected $returnType    = 'App\Entities\Genre';
    protected $allowedFields = ['name'];
}
