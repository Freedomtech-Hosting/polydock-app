<?php 

namespace FreedomtechHosting\PolydockApp;

use FreedomtechHosting\PolydockApp\Enums\PolydockAppInstanceStatus;
interface PolydockAppInstanceInterface
{
    
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
}