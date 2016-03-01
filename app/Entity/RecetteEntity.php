<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 26/02/2016
 * Time: 03:41
 */

namespace App\Entity;

use \Core\Entity\Entity;

class RecetteEntity extends Entity{

    public function getUrl(){
        return 'index.php?page=recipe&id=' . $this->id;
    }
}