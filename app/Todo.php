<?php
/**
 * Created by PhpStorm.
 * User: abeeb
 * Date: 5/17/18
 * Time: 12:25 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    protected $fillable = ['label', 'completed', 'body'];

}