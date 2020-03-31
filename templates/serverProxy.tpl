<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace {{ namespace }};

class {{ name }} implements {{ interface }}
{
    private $service;

    public function __construct(
        {{ serverInterface }} $service
    ) {
        $this->service = $service;
    }
{% for method in methods %}

    public function {{ method.name }}(\Spiral\GRPC\ContextInterface $ctx, {{ method.proto.input }} $in): {{ method.proto.output }}
    {
        try {
            $magentoDtoRequest = $this->{{ method.name }}FromProto($in);
            $magentoDtoResponse = $this->service->{{ method.name }}($magentoDtoRequest);
            return $this->{{ method.name }}ToProto($magentoDtoResponse);
        } catch (\Exception $e) {
            throw new \Spiral\GRPC\Exception\InvokeException(
                $e->getMessage(),
                \Spiral\GRPC\StatusCode::UNKNOWN,
                [],
                $e
            );
        }
    }

    private function {{ method.name }}FromProto({{ method.proto.input }} $value): {{ method.input.interface }}
    {
        {{ method.input.fromProtoContent|raw }}

        return $out;
    }

    private function {{ method.name }}ToProto({{ method.output.interface }} $value): {{ method.proto.output}}
    {
        {{ method.output.toProtoContent|raw }}

        return $proto;
    }

{% endfor %}
}
