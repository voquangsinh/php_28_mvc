<?php
require_once 'BaseModel.php';

class Author extends BaseModel 
{
    public $table = 'user_profile';

    public $fillables = [
        'id',
        'last_name',
        'first_name',
        'phone_number',
        'gender',
        'user_id',
    ];
}
