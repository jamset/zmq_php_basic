<?php
/**
 * Created by PhpStorm.
 * User: nms
 * Date: 03.07.16
 * Time: 16:39
 */
namespace FractalBasic\ZMQ\Abstracts\Inventory;

use FractalBasic\Inventory\Abstracts\BaseModuleDto;

class BaseZMQDto extends BaseModuleDto
{

    /**
     * @var BaseSocketsParams
     */
    protected $socketsParams;

    /**
     * @return BaseSocketsParams
     */
    public function getSocketsParams()
    {
        return $this->socketsParams;
    }

    /**
     * @param BaseSocketsParams $socketsParams
     */
    public function setSocketsParams(BaseSocketsParams $socketsParams)
    {
        $this->socketsParams = $socketsParams;
    }

}