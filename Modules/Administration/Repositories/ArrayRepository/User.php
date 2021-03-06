<?php

/**
 * Created by PhpStorm.
 * User: jagarsoft
 * Date: 21/04/2018
 * Time: 23:00
 */

namespace Modules\Administration\Repositories\ArrayRepository;


use Modules\Administration\Repositories\Model;
use Modules\Administration\Repositories\Repository;


class User extends Model implements Repository
{
    protected $items = ['ejemplo','uno'];

    public function __construct($items = ['Ejemplo'])
    {
        parent::__construct($items);

        $this->items = $items;
    }
}