<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: descriptor.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message representing a option the parser does not recognize. This only
 * appears in options protos created by the compiler::Parser class.
 * DescriptorPool resolves these when building Descriptor objects. Therefore,
 * options protos in descriptor objects (e.g. returned by Descriptor::options(),
 * or produced by Descriptor::CopyTo()) will never have UninterpretedOptions
 * in them.
 *
 * Generated from protobuf message <code>google.protobuf.UninterpretedOption</code>
 */
class UninterpretedOption extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption.NamePart name = 2;</code>
     */
    private $name;
    /**
     * The value of the uninterpreted option, in whatever type the tokenizer
     * identified it as during parsing. Exactly one of these should be set.
     *
     * Generated from protobuf field <code>string identifier_value = 3;</code>
     */
    protected $identifier_value = '';
    /**
     * Generated from protobuf field <code>uint64 positive_int_value = 4;</code>
     */
    protected $positive_int_value = 0;
    /**
     * Generated from protobuf field <code>int64 negative_int_value = 5;</code>
     */
    protected $negative_int_value = 0;
    /**
     * Generated from protobuf field <code>double double_value = 6;</code>
     */
    protected $double_value = 0.0;
    /**
     * Generated from protobuf field <code>bytes string_value = 7;</code>
     */
    protected $string_value = '';
    /**
     * Generated from protobuf field <code>string aggregate_value = 8;</code>
     */
    protected $aggregate_value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\UninterpretedOption\NamePart[]|\Google\Protobuf\Internal\RepeatedField $name
     *     @type string $identifier_value
     *           The value of the uninterpreted option, in whatever type the tokenizer
     *           identified it as during parsing. Exactly one of these should be set.
     *     @type int|string $positive_int_value
     *     @type int|string $negative_int_value
     *     @type float $double_value
     *     @type string $string_value
     *     @type string $aggregate_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption.NamePart name = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption.NamePart name = 2;</code>
     * @param \Google\Protobuf\UninterpretedOption\NamePart[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\UninterpretedOption\NamePart::class);
        $this->name = $arr;

        return $this;
    }

    /**
     * The value of the uninterpreted option, in whatever type the tokenizer
     * identified it as during parsing. Exactly one of these should be set.
     *
     * Generated from protobuf field <code>string identifier_value = 3;</code>
     * @return string
     */
    public function getIdentifierValue()
    {
        return $this->identifier_value;
    }

    /**
     * The value of the uninterpreted option, in whatever type the tokenizer
     * identified it as during parsing. Exactly one of these should be set.
     *
     * Generated from protobuf field <code>string identifier_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentifierValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->identifier_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 positive_int_value = 4;</code>
     * @return int|string
     */
    public function getPositiveIntValue()
    {
        return $this->positive_int_value;
    }

    /**
     * Generated from protobuf field <code>uint64 positive_int_value = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPositiveIntValue($var)
    {
        GPBUtil::checkUint64($var);
        $this->positive_int_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 negative_int_value = 5;</code>
     * @return int|string
     */
    public function getNegativeIntValue()
    {
        return $this->negative_int_value;
    }

    /**
     * Generated from protobuf field <code>int64 negative_int_value = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNegativeIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->negative_int_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double double_value = 6;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->double_value;
    }

    /**
     * Generated from protobuf field <code>double double_value = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->double_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes string_value = 7;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->string_value;
    }

    /**
     * Generated from protobuf field <code>bytes string_value = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->string_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string aggregate_value = 8;</code>
     * @return string
     */
    public function getAggregateValue()
    {
        return $this->aggregate_value;
    }

    /**
     * Generated from protobuf field <code>string aggregate_value = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAggregateValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->aggregate_value = $var;

        return $this;
    }

}

