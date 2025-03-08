<?php 

namespace FreedomtechHosting\PolydockApp;

use FreedomtechHosting\PolydockApp\Exceptions\PolydockEngineValidationException;
use FreedomtechHosting\PolydockApp\Traits\PolydockAppLoggerTrait;

abstract class PolydockEngineBase implements PolydockEngineInterface
{
    use PolydockAppLoggerTrait;

    /**
     * Validate that an app instance has all required variables
     * @param PolydockAppInstanceInterface $appInstance The app instance to validate
     * @return bool True if the app instance has all required variables, false otherwise
     * @throws PolydockEngineValidationException If a required variable is missing
     */
    public function validateAppInstanceHasAllRequiredVariables(PolydockAppInstanceInterface $appInstance): bool
    {
        foreach($appInstance->getApp()->getVariableDefinitions() as $variableDefinition) {
            if(!$appInstance->getKeyValue($variableDefinition->getName())) {
                throw new PolydockEngineValidationException(
                    sprintf(
                        'App instance %s is missing required variable %s',
                        $appInstance->getAppType(),
                        $variableDefinition->getName()
                    )
                );
            }
        }

        return true;
    }
}