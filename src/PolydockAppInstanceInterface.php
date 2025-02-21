<?php 

namespace FreedomtechHosting\PolydockApp;

use FreedomtechHosting\PolydockApp\Enums\PolydockAppInstanceStatus;
interface PolydockAppInstanceInterface
{
    /**
     * Set the app instance
     * @param PolydockAppInterface $app The app instance
     * @return self Returns the instance for method chaining
     */
    public function setApp(PolydockAppInterface $app): self;

    /** 
     * Get the app instance
     * @return PolydockAppInterface The app instance
     */
    public function getApp(): PolydockAppInterface;


    /**
     * Set the type of the app instance
     * @param string $appType The type of the app instance
     * @return self Returns the instance for method chaining
     */
    public function setAppType(string $appType): self;

    /**
     * Get the type of the app instance
     * @return string The type of the app instance
     */
    public function getAppType(): string;
    
    /**
     * Get the current status of the app instance
     * @return PolydockAppInstanceStatus The current status enum value
     */
    public function getStatus(): PolydockAppInstanceStatus;

    /**
     * Set the status of the app instance
     * @param PolydockAppInstanceStatus $status The new status to set
     * @return self Returns the instance for method chaining
     */
    public function setStatus(PolydockAppInstanceStatus $status): self;
    
    /**
     * Store a key-value pair for the app instance
     * @param string $key The key to store
     * @param string $value The value to store
     * @return self Returns the instance for method chaining
     */
    public function storeKeyValue(string $key, string $value): self;

    /**
     * Get a stored value by key
     * @param string $key The key to retrieve
     * @return string The stored value, or empty string if not found
     */
    public function getKeyValue(string $key): string;

    /**
     * Delete a stored key-value pair
     * @param string $key The key to delete
     * @return self Returns the instance for method chaining
     */
    public function deleteKeyValue(string $key): self;

    /**
     * Log a message for the app instance
     * @param string $message The message to log
     * @return self Returns the instance for method chaining
     */
    public function log(string $message): self;
}