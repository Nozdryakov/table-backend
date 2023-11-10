<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadsOfDepartment extends Model
{
    /**
     * @var mixed|string
     */
    public mixed $surname;
    /**
     * @var mixed|string
     */
    public mixed $name;
    /**
     * @var mixed|string
     */
    public mixed $f_name;
    /**
     * @var int|mixed
     */
    public mixed $gender;
    /**
     * @var mixed|string
     */
    public mixed $date_of_birth;
    /**
     * @var mixed|string
     */
    public mixed $date_of_start;
    /**
     * @var \Illuminate\Support\Carbon|mixed
     */
    public mixed $created_at;
    protected $primaryKey = 'head_of_dep_id';


    use HasFactory;
}
