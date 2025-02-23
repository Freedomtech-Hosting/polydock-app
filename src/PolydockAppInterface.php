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
     * Create an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to create
     * @return PolydockAppInstanceInterface The created app instance
     */
    public function createAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

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
     * Deploy an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to deploy
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function deployAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

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
     * Remove an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to remove
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function removeAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

    /**
     * Execute post-remove actions for an app instance
     * @param PolydockAppInstanceInterface $appInstance The app instance to process
     * @return PolydockAppInstanceInterface The processed app instance
     */
    public function postRemoveAppInstance(PolydockAppInstanceInterface $appInstance): PolydockAppInstanceInterface;

    /**
     * Set the logger instance
     * @param PolydockAppLoggerInterface $logger The logger instance
     * @return self Returns the instance for method chaining
     */
    public function setLogger(PolydockAppLoggerInterface $logger): self;

    /**
     * Get the logger instance
     * @return PolydockAppLoggerInterface The logger instance
     */
    public function getLogger(): PolydockAppLoggerInterface;

    /**
     * Log an informational message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return self Returns the instance for method chaining
     */
    public function info(string $message, array $context = []): self;

    /**
     * Log an error message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return self Returns the instance for method chaining
     */
    public function error(string $message, array $context = []): self;

    /**
     * Log a warning message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return self Returns the instance for method chaining
     */
    public function warning(string $message, array $context = []): self;

    /**
     * Log a debug message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return self Returns the instance for method chaining
     */
    public function debug(string $message, array $context = []): self;

    /**
     * Set the engine instance
     * @param PolydockEngineInterface $engine The engine instance
     * @return self Returns the instance for method chaining
     */
    public function setEngine(PolydockEngineInterface $engine): self;

    /**
     * Get the engine instance
     * @return PolydockEngineInterface The engine instance
     */
    public function getEngine(): PolydockEngineInterface;
}