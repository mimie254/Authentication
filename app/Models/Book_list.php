<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_list extends Model
{
    use HasFactory;
    protected $fillable=['title','author','cover_photo','categories','remarks','year_of_publish'];
    public $timestamps = false;

    public function getDecodedStatusAttribute(){
        switch($this->status){
            case 0:
                return "inactive";
                break;
                case 1:
                    return "active"; 
                    break;
                    default:
                    return"unknown";
        }
    }
    public $casts=['decoded_status'];
}
