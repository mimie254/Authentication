<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $fillable=['name','nationality','no_of_books_published','reviews','awards_won','best_selling_book'];
    public $timestamps=false;

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
