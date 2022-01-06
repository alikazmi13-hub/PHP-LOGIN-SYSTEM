<?php
// This Will Handle All Data in Database 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
// Add More Details
    protected $fillable =[
        'Client_Name',
        'Client_Email',
        'Project_Title',
        'Project_Technology',
        'Project_Type',
        'Project_Status',
        'Project_Description',
    ];
}
