<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: descriptor.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a value within an enum.
 *
 * Generated from protobuf message <code>google.protobuf.EnumValueDescriptorProto</code>
 */
class EnumValueDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 number = 2;</code>
     */
    protected $number = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.EnumValueOptions options = 3;</code>
     */
    protected $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $number
     *     @type \Google\Protobuf\EnumValueOptions $options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 number = 2;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>int32 number = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.EnumValueOptions options = 3;</code>
     * @return \Google\Protobuf\EnumValueOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.EnumValueOptions options = 3;</code>
     * @param \Google\Protobuf\EnumValueOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\EnumValueOptions::class);
        $this->options = $var;

        return $this;
    }

}

