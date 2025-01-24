<?php

declare(strict_types=1);

namespace App;

class PrettyPrintHelper
{
    public function prettyPrint(string $value): void
    {
        echo "<pre>";
        echo "$value";
        echo "</pre>";
    }
}