<?php 

namespace FreedomtechHosting\PolydockApp\Enums;

enum PolydockAppVariableDefinitionValueFromType: string
{
    case USER = 'user';
    case APP = 'app';
    case INTEGRATION = 'integration';
    case DERIVED = 'derived';
    case CONSTANT = 'constant';

    public function getTypeDescription(): string
    {
        return match ($this) {
            self::USER => 'Value from User Input',
            self::APP => 'Value from App Configuration',
            self::DERIVED => 'Value derived from context or other variables',
            self::INTEGRATION => 'Value from Integration',
            self::CONSTANT => 'Value from Constant',
        };
    }

    public function getValues(): array
    {
        return array_map(fn (PolydockAppVariableDefinitionValueFromType $type) => $type->value, self::cases());
    }

    public function getTypeColor(): string
    {
        return match ($this) {
            self::USER => 'bg-blue-500',
            self::APP => 'bg-green-500',
            self::INTEGRATION => 'bg-red-500',
            self::DERIVED => 'bg-yellow-500',
            self::CONSTANT => 'bg-purple-500',
        };
    }

    public function getTypeIcon(): string
    {
        return match ($this) {
            self::USER => 'user',
            self::APP => 'app',
            self::INTEGRATION => 'integration',
            self::DERIVED => 'derived',
            self::CONSTANT => 'constant',
        };
    }
}