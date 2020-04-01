<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace {{ namespace }};

interface {{ class }}Interface
{
{% for field in fields %}

    {% if field.simple %}
    /**
     * @return {{ field.doc.output }}
     */
    public function get{{ field.name }}(): {{ field.type }};
    {% else %}
    /**
     * @return {{ field.doc.output }}|null
     */
    public function get{{ field.name }}(): ?{{ field.type }};
    {% endif%}

    /**
     * @param {{ field.doc.input }} $value
     * @return void
     */
    public function set{{ field.name }}({{ field.type }} $value): void;
{% endfor %}
}
