<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: descriptor.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a field within a message.
 *
 * Generated from protobuf message <code>google.protobuf.FieldDescriptorProto</code>
 */
class FieldDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 number = 3;</code>
     */
    protected $number = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.FieldDescriptorProto.Label label = 4;</code>
     */
    protected $label = 0;
    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldDescriptorProto.Type type = 5;</code>
     */
    protected $type = 0;
    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>string type_name = 6;</code>
     */
    protected $type_name = '';
    /**
     * For extensions, this is the name of the type being extended.  It is
     * resolved in the same manner as type_name.
     *
     * Generated from protobuf field <code>string extendee = 2;</code>
     */
    protected $extendee = '';
    /**
     * For numeric types, contains the original text representation of the value.
     * For booleans, "true" or "false".
     * For strings, contains the default text contents (not escaped in any way).
     * For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     * TODO(kenton):  Base-64 encode?
     *
     * Generated from protobuf field <code>string default_value = 7;</code>
     */
    protected $default_value = '';
    /**
     * If set, gives the index of a oneof in the containing type's oneof_decl
     * list.  This field is a member of that oneof.
     *
     * Generated from protobuf field <code>int32 oneof_index = 9;</code>
     */
    protected $oneof_index = 0;
    /**
     * JSON name of this field. The value is set by protocol compiler. If the
     * user has set a "json_name" option on this field, that option's value
     * will be used. Otherwise, it's deduced from the field's name by converting
     * it to camelCase.
     *
     * Generated from protobuf field <code>string json_name = 10;</code>
     */
    protected $json_name = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.FieldOptions options = 8;</code>
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
     *     @type int $label
     *     @type int $type
     *           If type_name is set, this need not be set.  If both this and type_name
     *           are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *     @type string $type_name
     *           For message and enum types, this is the name of the type.  If the name
     *           starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     *           rules are used to find the type (i.e. first the nested types within this
     *           message are searched, then within the parent, on up to the root
     *           namespace).
     *     @type string $extendee
     *           For extensions, this is the name of the type being extended.  It is
     *           resolved in the same manner as type_name.
     *     @type string $default_value
     *           For numeric types, contains the original text representation of the value.
     *           For booleans, "true" or "false".
     *           For strings, contains the default text contents (not escaped in any way).
     *           For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     *           TODO(kenton):  Base-64 encode?
     *     @type int $oneof_index
     *           If set, gives the index of a oneof in the containing type's oneof_decl
     *           list.  This field is a member of that oneof.
     *     @type string $json_name
     *           JSON name of this field. The value is set by protocol compiler. If the
     *           user has set a "json_name" option on this field, that option's value
     *           will be used. Otherwise, it's deduced from the field's name by converting
     *           it to camelCase.
     *     @type \Google\Protobuf\FieldOptions $options
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
     * Generated from protobuf field <code>int32 number = 3;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>int32 number = 3;</code>
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
     * Generated from protobuf field <code>.google.protobuf.FieldDescriptorProto.Label label = 4;</code>
     * @return int
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldDescriptorProto.Label label = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\FieldDescriptorProto_Label::class);
        $this->label = $var;

        return $this;
    }

    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldDescriptorProto.Type type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldDescriptorProto.Type type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\FieldDescriptorProto_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>string type_name = 6;</code>
     * @return string
     */
    public function getTypeName()
    {
        return $this->type_name;
    }

    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>string type_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_name = $var;

        return $this;
    }

    /**
     * For extensions, this is the name of the type being extended.  It is
     * resolved in the same manner as type_name.
     *
     * Generated from protobuf field <code>string extendee = 2;</code>
     * @return string
     */
    public function getExtendee()
    {
        return $this->extendee;
    }

    /**
     * For extensions, this is the name of the type being extended.  It is
     * resolved in the same manner as type_name.
     *
     * Generated from protobuf field <code>string extendee = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExtendee($var)
    {
        GPBUtil::checkString($var, True);
        $this->extendee = $var;

        return $this;
    }

    /**
     * For numeric types, contains the original text representation of the value.
     * For booleans, "true" or "false".
     * For strings, contains the default text contents (not escaped in any way).
     * For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     * TODO(kenton):  Base-64 encode?
     *
     * Generated from protobuf field <code>string default_value = 7;</code>
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * For numeric types, contains the original text representation of the value.
     * For booleans, "true" or "false".
     * For strings, contains the default text contents (not escaped in any way).
     * For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     * TODO(kenton):  Base-64 encode?
     *
     * Generated from protobuf field <code>string default_value = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_value = $var;

        return $this;
    }

    /**
     * If set, gives the index of a oneof in the containing type's oneof_decl
     * list.  This field is a member of that oneof.
     *
     * Generated from protobuf field <code>int32 oneof_index = 9;</code>
     * @return int
     */
    public function getOneofIndex()
    {
        return $this->oneof_index;
    }

    /**
     * If set, gives the index of a oneof in the containing type's oneof_decl
     * list.  This field is a member of that oneof.
     *
     * Generated from protobuf field <code>int32 oneof_index = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setOneofIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->oneof_index = $var;

        return $this;
    }

    /**
     * JSON name of this field. The value is set by protocol compiler. If the
     * user has set a "json_name" option on this field, that option's value
     * will be used. Otherwise, it's deduced from the field's name by converting
     * it to camelCase.
     *
     * Generated from protobuf field <code>string json_name = 10;</code>
     * @return string
     */
    public function getJsonName()
    {
        return $this->json_name;
    }

    /**
     * JSON name of this field. The value is set by protocol compiler. If the
     * user has set a "json_name" option on this field, that option's value
     * will be used. Otherwise, it's deduced from the field's name by converting
     * it to camelCase.
     *
     * Generated from protobuf field <code>string json_name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setJsonName($var)
    {
        GPBUtil::checkString($var, True);
        $this->json_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldOptions options = 8;</code>
     * @return \Google\Protobuf\FieldOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldOptions options = 8;</code>
     * @param \Google\Protobuf\FieldOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldOptions::class);
        $this->options = $var;

        return $this;
    }

}

