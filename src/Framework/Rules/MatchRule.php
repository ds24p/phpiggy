<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;


class MatchRule implements RuleInterface
{
    public function validate(array $data, string $filed, array $params): bool
    {
        $fieldOne = $data[$filed];
        $fieldTwo = $data[$params[0]];

        return $fieldOne === $fieldTwo;
    }
    public function getMessage(array $data, string $filed, array $params): string
    {
        return "Does not match {$params[0]} field";
    }
}
