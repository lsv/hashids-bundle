# Symfony hashids bundle

Made for Symfony ^2.7 and also ^3.0

### Installation

##### composer

```bash
composer require lsv/hashidsbundle
```

or add it your composer.json

```json
"require": {
    "lsv/hashidsbundle": "^1.0"
}
```

##### Enable bundle

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new \Lsv\HashidsBundle\LsvHashidsBundle(),
    );
}
```

##### Configuration

All configuration is optional, but this is the configuration availible

```yml
lsv_hashids:
    # Salt is default the same as your app secret
    salt: "%secret%"
    # Length is default 8
    length: 8
    # Alphabet is default "abcdefghij1234567890" - Default in hashids
    alphabet: "abcdefghij1234567890"
```

### Usage

##### Controller

In your controller you can use

```php
$this->get('lsv_hashids')->encode($id);
$this->get('lsv_hashids')->decode($string);
```

##### Twig

Also added 3 twig methods

```twig
id | hashids
id | encode_hashids
string | decode_hashids
```
