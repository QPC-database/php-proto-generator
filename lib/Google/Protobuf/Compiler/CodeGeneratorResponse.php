<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Protobuf\Compiler;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The plugin writes an encoded CodeGeneratorResponse to stdout.
 *
 * Generated from protobuf message <code>google.protobuf.compiler.CodeGeneratorResponse</code>
 */
class CodeGeneratorResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Error message.  If non-empty, code generation failed.  The plugin process
     * should exit with status code zero even if it reports an error in this way.
     * This should be used to indicate errors in .proto files which prevent the
     * code generator from generating correct code.  Errors which indicate a
     * problem in protoc itself -- such as the input CodeGeneratorRequest being
     * unparseable -- should be reported by writing a message to stderr and
     * exiting with a non-zero status code.
     *
     * Generated from protobuf field <code>string error = 1;</code>
     */
    protected $error = '';
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.compiler.CodeGeneratorResponse.File file = 15;</code>
     */
    private $file;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $error
     *           Error message.  If non-empty, code generation failed.  The plugin process
     *           should exit with status code zero even if it reports an error in this way.
     *           This should be used to indicate errors in .proto files which prevent the
     *           code generator from generating correct code.  Errors which indicate a
     *           problem in protoc itself -- such as the input CodeGeneratorRequest being
     *           unparseable -- should be reported by writing a message to stderr and
     *           exiting with a non-zero status code.
     *     @type \Google\Protobuf\Compiler\CodeGeneratorResponse\File[]|\Google\Protobuf\Internal\RepeatedField $file
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Test::initOnce();
        parent::__construct($data);
    }

    /**
     * Error message.  If non-empty, code generation failed.  The plugin process
     * should exit with status code zero even if it reports an error in this way.
     * This should be used to indicate errors in .proto files which prevent the
     * code generator from generating correct code.  Errors which indicate a
     * problem in protoc itself -- such as the input CodeGeneratorRequest being
     * unparseable -- should be reported by writing a message to stderr and
     * exiting with a non-zero status code.
     *
     * Generated from protobuf field <code>string error = 1;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Error message.  If non-empty, code generation failed.  The plugin process
     * should exit with status code zero even if it reports an error in this way.
     * This should be used to indicate errors in .proto files which prevent the
     * code generator from generating correct code.  Errors which indicate a
     * problem in protoc itself -- such as the input CodeGeneratorRequest being
     * unparseable -- should be reported by writing a message to stderr and
     * exiting with a non-zero status code.
     *
     * Generated from protobuf field <code>string error = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.compiler.CodeGeneratorResponse.File file = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.compiler.CodeGeneratorResponse.File file = 15;</code>
     * @param \Google\Protobuf\Compiler\CodeGeneratorResponse\File[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFile($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Compiler\CodeGeneratorResponse\File::class);
        $this->file = $arr;

        return $this;
    }

}
