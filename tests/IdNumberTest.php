<?php

namespace FakerChineseIdCard\Test\Provider;

use Faker\Factory;
use FakerChineseIdCard\Provider\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = Factory::create('zh_CN');
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIdNumber()
    {
        $id = $this->faker->idNumber;
        $this->assertRegExp('/(^[1-9]\d{5}(18|19|([23]\d))\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$)|(^[1-9]\d{5}\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}$)/', $id);
    }
}