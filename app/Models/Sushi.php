<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Sushi extends Model
{
    use \Sushi\Sushi;  
    
    public function getRows()
    {
        $data = [];

        for($i=1; $i<100; $i++) {
            array_push($data, [
                'id' => $i,
                'name' => "Sushi {$i}"
            ]);
        }

        return $data;
    }    
}