<?php
/**
 * Created by PhpStorm.
 * User: guven
 * Date: 10.01.2016
 * Time: 00:31
 */

namespace ResminApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{

    public function paginate($total, $limit, $page)
    {
        return [
            'total' => $total,
            'per_page' => $limit,
            'current_page' => $page,
            'last_page' => ceil($total / $limit)
        ];
    }
}