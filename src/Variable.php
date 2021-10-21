<?php

/*
 * This file is part of the WSDL2PHPGenerator package.
 * (c) WSDL2PHPGenerator.
 */

namespace Wsdl2PhpGenerator;

/**
 * Very stupid datatype to use instead of array.
 *
 * @author Fredrik Wallgren <fredrik.wallgren@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class Variable
{
    /**
     * @var string The type
     */
    private $type;

    /**
     * @var string The name
     */
    private $name;

    /**
     * @var bool nullable
     */
    private $nullable;

    /**
     * @var string the use
     */
    private $use;

    /**
     * @param string $type
     * @param string $name
     * @param bool   $nullable
     */
    public function __construct($type, $name, $nullable, $use = 'required')
    {
        $this->type     = $type;
        $this->name     = $name;
        $this->nullable = $nullable;
        $this->use = $use;
        if ($use == 'optional') {
            $this->nullable = true;
        }
    }

    /**
     * @return string
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * @param string $use
     * @return Variable
     */
    public function setUse($use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * @return bool
     */
    public function isArray()
    {
        return substr($this->type, -2, 2) == '[]';
    }
}
