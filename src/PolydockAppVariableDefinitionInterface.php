<?php 

namespace FreedomtechHosting\PolydockApp;

use FreedomtechHosting\PolydockApp\Enums\PolydockAppVariableDefinitionValueFromType;

interface PolydockAppVariableDefinitionInterface
{
    
    public function __construct(string $storageKey, string $name, string $scope, PolydockAppVariableDefinitionValueFromType $valueFrom, bool $required = false, string $defaultValue = '');

    /**
     * Get the storage key of the variable
     * @return string The storage key of the variable
     */
    public function getStorageKey(): string;

    /**
     * Set the storage key of the variable
     * @param string $storageKey The storage key of the variable
     * @return self
     */
    public function setStorageKey(string $storageKey): self;

    /**
     * Get the name of the variable
     * @return string The name of the variable
     */
    public function getName(): string;
    
    /**
     * Set the name of the variable
     * @param string $name The name of the variable
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Get the description of the variable
     * @return string The description of the variable
     */
    public function getScope(): string;

    /**
     * Set the scope of the variable
     * @param string $scope The scope of the variable
     * @return self
     */
    public function setScope(string $scope): self;

    /**
     * Set the value source of the variable
     * @param string $valueSource The value source of the variable
     * @return self
     */
    public function setValueFrom(PolydockAppVariableDefinitionValueFromType $valueFrom): self;

    /**
     * Get the value source of the variable
     * @return string The value source of the variable
     */
    public function getValueFrom(): PolydockAppVariableDefinitionValueFromType;

    /**
     * Set the required status of the variable
     * @param bool $required The required status of the variable
     * @return self
     */
    public function setRequired(bool $required): self;

    /**
     * Get the required status of the variable
     * @return bool The required status of the variable
     */
    public function isRequired(): bool;   

    /**
     * Get the default value of the variable
     * @return string The default value of the variable
     */
    public function getDefaultValue(): string;

    /**
     * Set the default value of the variable
     * @param string $defaultValue The default value of the variable
     * @return self
     */
    public function setDefaultValue(string $defaultValue): self;
}