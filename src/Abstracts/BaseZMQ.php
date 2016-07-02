<?php
/**
 * Created by PhpStorm.
 * User: nms
 * Date: 02.07.16
 * Time: 19:45
 */
namespace FractalBasic\ZMQ\Abstracts;

use FractalBasic\Inventory\Abstracts\BaseModule;

abstract class BaseZMQ extends BaseModule
{
    /**
     * @var \ZMQContext
     */
    protected $context;

    /**
     * @return \ZMQContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param \ZMQContext $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return null
     */
    public function initZMQContext()
    {
        if (is_null($this->context)) {
            $this->context = new \ZMQContext();
        }

        return null;
    }


}