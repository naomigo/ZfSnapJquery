<?php

namespace ZfSnapJquery\Form\Element;

use Zend\Form\Element;

/**
 * Datepicker
 *
 * @author Witold Wasiczko <witold@wasiczko.pl>
 * @copyright 2013 (c) by RedSky Sp. z o.o.
 */
class Datepicker extends Element
{
    /**
     * Seed attributes
     *
     * @var array
     */
    protected $attributes = array(
        'type' => 'datepicker'
    );
}
