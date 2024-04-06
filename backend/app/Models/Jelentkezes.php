<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jelentkezes extends Model
{
    use HasFactory;
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('tura_id', '=', $this->getAttribute('tura_id'));

        return $query;
    }
    protected $fillable = [
        'user_id',
        'tura_id',
        'jelentkezes_datuma',
        'fizetve',
    ];
}
