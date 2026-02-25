<?php

namespace PayPal\Exception;

/**
 * Class PayPalConfigurationException
 *
 * @package PayPal\Exception
 */
class PayPalConfigurationException extends \Exception
{

    /**
     * Default Constructor
     *
     * @param string $message
     * @param int  $code
     */
    public function __construct(string $message = '', $code = 0)
    {
        parent::__construct($message, $code);
    }
}
