#### Installation

```sh
composer require jialeicui/faker-chinese-id-number
```

#### Usage

```php
use FakerChineseIdCard\Provider\Person;

$faker = \Faker\Factory::create('zh_CN');
$faker->addProvider(new Person($faker));
$faker->idNumber;
```
