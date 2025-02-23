<?php 

namespace FreedomtechHosting\PolydockApp;

interface PolydockAppInterface
{
    /**
     * Initialize a new app instance with fundamental properties
     * @param string $appName The name of the app
     * @param string $appDescription Description of the app
     * @param string $appAuthor Name of the author/creator
     * @param string $appWebsite Website URL for the app
     * @param string $appSupportEmail Support email address
     * @param array $appConfiguration Optional configuration settings
     */
    public function __construct(string $appName, string $appDescription, string $appAuthor, string $appWebsite, string $appSupportEmail, array $appConfiguration = []);

    
    /**
     * Get the name of the app
     * @return string The app name
     */
    public function getAppName(): string;

    /**
     * Set the name of the app
     * @param string $appName The name to set
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function setAppName(string $appName): PolydockAppInterface;

    /**
     * Get the version of the app
     * @return string The app version
     */
    public static function getAppVersion(): string;

    /**
     * Get the description of the app
     * @return string The app description
     */
    public function getAppDescription(): string;

    /**
     * Set the description of the app
     * @param string $appDescription The description to set
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function setAppDescription(string $appDescription): PolydockAppInterface;

    /**
     * Get the author of the app
     * @return string The app author
     */
    public function getAppAuthor(): string;

    /**
     * Set the author of the app
     * @param string $appAuthor The author to set
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function setAppAuthor(string $appAuthor): PolydockAppInterface;

    /**
     * Get the website URL of the app
     * @return string The app website URL
     */
    public function getAppWebsite(): string;

    /**
     * Set the website URL of the app
     * @param string $appWebsite The website URL to set
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function setAppWebsite(string $appWebsite): PolydockAppInterface;

    /**
     * Get the support email address for the app
     * @return string The app support email
     */
    public function getAppSupportEmail(): string;

    /**
     * Set the support email address for the app
     * @param string $appSupportEmail The support email to set
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function setAppSupportEmail(string $appSupportEmail): PolydockAppInterface;

    /**
     * Set the entire app configuration array
     * @param array $appConfiguration The configuration array to set
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function setAppConfiguration(array $appConfiguration): PolydockAppInterface;

    /**
     * Get the entire app configuration array
     * @return array The current configuration array
     */
    public function getAppConfiguration(): array;
    
    /**
     * Set a specific configuration value by key
     * @param string $key The configuration key to set
     * @param string $value The value to set for the key
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function setAppConfigurationValue(string $key, string $value): PolydockAppInterface;

    /**
     * Get a specific configuration value by key
     * @param string $key The configuration key to retrieve
     * @return string The configuration value, or empty string if not found
     */
    public function getAppConfigurationValue(string $key): string;

    /**
     * Remove a configuration value by key
     * @param string $key The configuration key to remove
     * @return PolydockAppInterface Returns the instance for method chaining
     */
    public function unsetAppConfigurationValue(string $key): PolydockAppInterface;

    /**
     * Check if the app configuration has been validated
     * @return bool True if validated, false otherwise
     */
    public function isValidated(): bool;

    /**
     * Execute pre-create actions for an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to process
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function preCreateAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

    /**
     * Execute post-create actions for an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to process
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function postCreateAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

    /**
     * Execute pre-deploy actions for an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to process
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function preDeployAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

    /**
     * Execute post-deploy actions for an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to process
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function postDeployAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

    /**
     * Execute pre-remove actions for an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to process
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function preRemoveAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

    /**
     * Execute post-remove actions for an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to process
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function postRemoveAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;
}