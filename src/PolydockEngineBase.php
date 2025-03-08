<?php 

namespace FreedomtechHosting\PolydockApp;

abstract class PolydockEngineBase implements PolydockEngineInterface
{
    /**
     * Validate that an app instance has all variables
     * @param PolydockAppInstanceInterface $appInstance The app instance to validate
     * @return bool True if the app instance has all variables, false otherwise
     */
    public function validateAppInstanceHasAllVariables(PolydockAppInstanceInterface $appInstance): bool
    {
        foreach($appInstance->getApp()->getVariableDefinitions() as $variableDefinition) {
            if(!$appInstance->getKeyValue($variableDefinition->getName())) {
                return false;
            }
        }

        return true;
    }
}