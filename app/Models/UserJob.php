<?php

    // Change namespace to App\Models if you put your model inside models
    namespace App\Models;

    // Library to create Model under Lumen
    use Illuminate\Database\Eloquent\Model;

     class UserJob extends Model {

        // Name of table
         protected $table = 'tbluserjob';

        // Columns in the table
        protected $fillable = [
         'jobid', 'jobname',
        ];

        // The code below will not require the fields created_at and updated_at in Lumen
        public $timestamps = false;

        // The code will customize your primary key field name, default in Lumen is id
        protected $primaryKey = 'jobid';
}