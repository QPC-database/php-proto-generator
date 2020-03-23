{
    "name": "{{ module.name }}",
    "description": "N/A",
    "config": {
        "sort-packages": true
    },
    "require": {
        "php": "~7.1.3||~7.2.0||~7.3.0",
        "magento/framework": "*",
        "google/protobuf": "^3.11"
    },
    "type": "magento2-module",
    "license": [
        "OSL-3.0",
        "AFL-3.0"
    ],
    "autoload": {
        "files": [
            "registration.php"
        ],
        "psr-4": {
            "{{ module.namespace }}": ""
        }
    }
}