<?php 

namespace FreedomtechHosting\PolydockApp;

abstract class PolydockEngineBase implements PolydockEngineInterface
{
    /**
     * Validate that an app instance has all required variables
     * @param PolydockAppInstanceInterface $appInstance The app instance to validate
     * @return bool True if the app instance has all required variables, false otherwise
     */
    public function validateAppInstanceHasAllRequiredVariables(PolydockAppInstanceInterface $appInstance): bool
    {
        foreach($appInstance->getApp()->getVariableDefinitions() as $variableDefinition) {
            if($variableDefinition->isRequired() && !$appInstance->getKeyValue($variableDefinition->getStorageKey())) {
                return false;
            }
        }

        return true;
    }
}