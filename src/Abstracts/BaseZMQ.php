<?php
/**
 * Created by PhpStorm.
 * User: nms
 * Date: 02.07.16
 * Time: 19:45
 */
namespace FractalBasic\ZMQ\Abstracts;

abstract class BaseZMQ
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


}