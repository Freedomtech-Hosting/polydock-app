<?php 

namespace FreedomtechHosting\PolydockApp\Traits;

use FreedomtechHosting\PolydockApp\PolydockAppInterface;
trait PolydockAppConfigurationTrait
{
   /**
    * Set the entire app configuration array
    * @param array $appConfiguration The configuration array to set
    * @return PolydockAppInterface Returns the instance for method chaining
    */
   public function setAppConfiguration(array $appConfiguration): PolydockAppInterface
   {
     $this->appConfiguration = $appConfiguration;
     return $this;
   }    

   /**
    * Get the entire app configuration array
    * @return array The current configuration array
    */
   public function getAppConfiguration(): array
   {
     return $this->appConfiguration;
   }

   /**
    * Get a specific configuration value by key
    * @param string $key The configuration key to retrieve
    * @return string The configuration value, or empty string if not found
    */
   public function getAppConfigurationValue(string $key): string
   {
     return $this->appConfiguration[$key] ?? '';
   }

   /**
    * Set a specific configuration value by key
    * @param string $key The configuration key to set
    * @param string $value The value to set for the key
    * @return PolydockAppInterface Returns the instance for method chaining
    */
   public function setAppConfigurationValue(string $key, string $value): PolydockAppInterface
   {
     $this->appConfiguration[$key] = $value;
     return $this;
   }

   /**
    * Remove a configuration value by key
    * @param string $key The configuration key to remove
    * @return PolydockAppInterface Returns the instance for method chaining
    */
   public function unsetAppConfigurationValue(string $key): PolydockAppInterface
   {
     unset($this->appConfiguration[$key]);
     return $this;
   }

   /**
    * Check if the configuration has been validated
    * @return bool True if validated, false otherwise
    */
   public function isValidated(): bool
   {
     return $this->isValidated;
   }
}
}   