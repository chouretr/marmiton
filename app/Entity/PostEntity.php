<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 26/02/2016
 * Time: 03:41
 */

namespace App\Entity;

use \Core\Entity\Entity;

class PostEntity extends Entity{

    public function yop(){
        return 'index.php?=recette&id=' . $this->id;
    }

}