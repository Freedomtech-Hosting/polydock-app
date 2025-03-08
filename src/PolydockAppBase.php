<?php 

namespace FreedomtechHosting\PolydockApp;

use FreedomtechHosting\PolydockApp\Traits\PolydockAppFundamentalsTrait;
use FreedomtechHosting\PolydockApp\Traits\PolydockAppConfigurationTrait;
use FreedomtechHosting\PolydockApp\Traits\PolydockAppLoggerTrait;

abstract class PolydockAppBase implements PolydockAppInterface
{   
    /**
     * The engine instance
     * @var PolydockEngineInterface
     */
    protected PolydockEngineInterface $engine;

    /**
     * The logger instance
     * @var PolydockAppLoggerInterface
     */
    protected PolydockAppLoggerInterface $logger;

    
    protected string $appName;
    
    /**
     * A description of what the app does
     * @var string
     */
    protected string $appDescription;

    /**
     * The name of the app's author/creator
     * @var string
     */
    protected string $appAuthor;

    /**
     * The website URL for the app
     * @var string
     */
    protected string $appWebsite;

    /**
     * Email address for app support inquiries
     * @var string
     */
    protected string $appSupportEmail;

    /**
     * Configuration settings for the app
     * @var array
     */
    protected array $appConfiguration;

    /**
     * Whether the app fundamentals have been validated
     * @var bool
     */
    private bool $isValidated = false;

    /**
     * Array of variable definitions
     * @var array<PolydockAppVariableDefinitionInterface>
     */
    protected array $variableDefinitions = [];

    use PolydockAppFundamentalsTrait;
    use PolydockAppConfigurationTrait;
    use PolydockAppLoggerTrait;

    /**
     * Initialize a new app instance with fundamental properties
     * @param string $appName The name of the app
     * @param string $appDescription Description of the app
     * @param string $appAuthor Name of the author/creator
     * @param string $appWebsite Website URL for the app
     * @param string $appSupportEmail Support email address
     * @param array $variableDefinitions Array of variable definitions
     */
    final public function __construct($appName, $appDescription, $appAuthor, $appWebsite, $appSupportEmail, array $variableDefinitions = [])
    {
        // Initialize logger using the trait method
        $this->initializeLogger();

        $this->setAppName($appName)
            ->setAppDescription($appDescription)
            ->setAppAuthor($appAuthor)
            ->setAppWebsite($appWebsite)
            ->setAppSupportEmail($appSupportEmail);

        foreach($variableDefinitions as $variableDefinition) {
            if(!$variableDefinition instanceof PolydockAppVariableDefinitionInterface) {
                throw new PolydockAppValidationException('Variable definition must implement PolydockAppVariableDefinitionInterface');
            }
                 
            $this->addVariableDefinition($variableDefinition);
        }

        $this->validateAppFundamentals();
    }

    public function addVariableDefinition(PolydockAppVariableDefinitionInterface $variableDefinition): self
    {
        $this->variableDefinitions[$variableDefinition->getName()] = $variableDefinition;
        return $this;
    }
    
    public function getVariableDefinitions(): array
    {
        return $this->variableDefinitions;
    }

    public function getVariableDefinition(string $name): ?PolydockAppVariableDefinitionInterface
    {
        return $this->variableDefinitions[$name] ?? null;
    }

    /**
     * Validates that all required fundamental app properties are set
     * @throws PolydockAppValidationException if any required property is empty
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    private function validateAppFundamentals(): PolydockAppInterface
    {
        if(empty($this->appName)) {
            throw new PolydockAppValidationException('App name is required');
        }

        if(empty($this::getAppVersion())) {
            throw new PolydockAppValidationException('App version is required');
        }

        if(empty($this->appDescription)) {
            throw new PolydockAppValidationException('App description is required');
        }

        if(empty($this->appAuthor)) {
            throw new PolydockAppValidationException('App author is required');
        }

        if(empty($this->appWebsite)) {
            throw new PolydockAppValidationException('App website is required');
        }

        if(empty($this->appSupportEmail)) {
            throw new PolydockAppValidationException('App support email is required');
        }   

        $this->isValidated = true;
        
        return $this;
    }

    public function getEngine(): PolydockEngineInterface
    {
        return $this->engine;
    }

    public function setEngine(PolydockEngineInterface $engine): self
    {
        $this->engine = $engine;
        return $this;
    }
}
