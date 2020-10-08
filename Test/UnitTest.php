<?php

declare(strict_types=1);

namespace brunoconte3\Test;

use brunoconte3\Validation\Format;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testCompanyIdentification(): void
    {
        $this->assertEquals('76.027.484/0001-24', Format::companyIdentification('76027484000124'));
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('894.213.600-10', Format::identifier('89421360010'));
    }

    public function testTelephone(): void
    {
        $this->assertEquals('(44) 99999-8888', Format::telephone(44999998888));
    }

    public function testRemoveAccent(): void
    {
        $this->assertEquals('Acafrao', Format::removeAccent('Açafrão'));
    }

    public function testZipCode(): void
    {
        $this->assertEquals('87047-590', Format::zipCode('87047590'));
    }
}