<?php 

namespace FreedomtechHosting\PolydockApp;

use FreedomtechHosting\PolydockApp\Traits\PolydockAppFundamentalsTrait;
use FreedomtechHosting\PolydockApp\Traits\PolydockAppConfigurationTrait;

abstract class PolydockAppBase implements PolydockAppInterface
{   
    protected string $appName;
    /**
     * The version number of the app
     * @var string
     */
    protected string $appVersion;

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

    use PolydockAppFundamentalsTrait;
    use PolydockAppConfigurationTrait;

    /**
     * Initialize a new app instance with fundamental properties
     * @param string $appName The name of the app
     * @param string $appVersion The version number
     * @param string $appDescription Description of the app
     * @param string $appAuthor Name of the author/creator
     * @param string $appWebsite Website URL for the app
     * @param string $appSupportEmail Support email address
     * @param array $appConfiguration Optional configuration settings
     */
    final public function __construct($appName, $appVersion, $appDescription, $appAuthor, $appWebsite, $appSupportEmail, $appConfiguration = [])
    {
        $this->setAppName($appName)
            ->setAppVersion($appVersion)
            ->setAppDescription($appDescription)
            ->setAppAuthor($appAuthor)
            ->setAppWebsite($appWebsite)
            ->setAppSupportEmail($appSupportEmail);

        if(sizeof($appConfiguration) > 0) { 
            $this->setAppConfiguration($appConfiguration);
        }

        $this->validateAppFundamentals();
    }

    /**
     * Validates that all required fundamental app properties are set
     * @throws PolydockAppValidationException if any required property is empty
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    final private function validateAppFundamentals(): PolydockAppInterface
    {
        if(empty($this->appName)) {
            throw new PolydockAppValidationException('App name is required');
        }

        if(empty($this->appVersion)) {
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
}
