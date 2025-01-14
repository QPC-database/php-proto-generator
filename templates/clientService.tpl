<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace {{ namespace }};

{% for import in imports %}
use {{ import }};
{% endfor %}
{% for import in proto.imports %}
use {{ import }};
{% endfor %}

/**
 * Autogenerated description for {{ name }} class
 *
 * @SuppressWarnings(PHPMD)
 */
class {{ name }} implements {{ interface }}
{
    /**
     * @var {{ proto.class }}
     */
    private $protoClient;

    /**
     * @param string $hostname
     * @param array $options
     * @param string|null $channel
     */
    public function __construct(
        string $hostname,
        array $options,
        ?string $channel = null
    ) {
        $this->protoClient = new {{ proto.class }}($hostname, $options, $channel);
}
{% for method in methods %}

    /**
     * @inheritdoc
     *
     * @param {{ method.input.type }} $request
     * @return {{ method.output.type }}
     * @throws \Throwable
     */
    public function {{ method.name }}({{ method.input.type }} $request): {{ method.output.type }}
    {
    $protoRequest = $this->{{ method.name }}ToProto($request);
    [$protoResult, $status] = $this->protoClient->{{ method.name }}($protoRequest)->wait();
    if ($status->code !== 0) {
    throw new \RuntimeException($status->details, $status->code);
    }
    return $this->{{ method.name }}FromProto($protoResult);
    }

    /**
     * Autogenerated description for {{ method.name }} method
     *
     * @param {{ method.input.type }} $value
     * @return {{ method.proto.input }}
     */
    private function {{ method.name }}ToProto({{ method.input.type }} $value): {{ method.proto.input }}
    {
    {{ method.input.toProtoContent|raw }}

    return $proto;
    }

    /**
     * Autogenerated description for {{ method.name }} method
     *
     * @param {{ method.proto.output }} $value
     * @return {{ method.output.type }}
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function {{ method.name }}FromProto({{ method.proto.output }} $value): {{ method.output.type }}
    {
    {{ method.output.fromProtoContent|raw }}

    return $out;
    }
{% endfor %}
}
