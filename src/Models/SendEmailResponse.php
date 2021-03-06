<?php
/*
 * PepipostAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostAPILib\Models;

use JsonSerializable;

/**
 *Response of the email
 */
class SendEmailResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var object $data public property
     */
    public $data;

    /**
     * @todo Write general description for this property
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @required
     * @maps error_info
     * @var \PepipostAPILib\Models\SendEmailError $errorInfo public property
     */
    public $errorInfo;

    /**
     * Constructor to set initial or default values of member properties
     * @param object         $data      Initialization value for $this->data
     * @param string         $message   Initialization value for $this->message
     * @param SendEmailError $errorInfo Initialization value for $this->errorInfo
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->data      = func_get_arg(0);
            $this->message   = func_get_arg(1);
            $this->errorInfo = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['data']       = $this->data;
        $json['message']    = $this->message;
        $json['error_info'] = $this->errorInfo;

        return $json;
    }
}
