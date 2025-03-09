<?php

namespace FreedomtechHosting\PolydockApp\Exceptions;

use Exception;
use FreedomtechHosting\PolydockApp\Enums\PolydockAppInstanceStatus;

class PolydockEngineProcessPolydockAppInstanceStatusException extends Exception
{
    /**
     * @var PolydockAppInstanceStatus|null
     */
    private ?PolydockAppInstanceStatus $expectedStatus;

    /**
     * @var PolydockAppInstanceStatus|null
     */
    private ?PolydockAppInstanceStatus $foundStatus;

    /**
     * Create a new PolydockEngineValidationException instance
     * @param string $message The exception message
     * @param int $code The exception code
     * @param Exception|null $previous The previous throwable used for exception chaining
     * @param PolydockAppInstanceStatus|null $expectedStatus The expected status of the app instance
     * @param PolydockAppInstanceStatus|null $currentStatus The current status of the app instance
     */
    public function __construct(string $message = "", int $code = 0, ?Exception $previous = null, 
    ?PolydockAppInstanceStatus $expectedStatus = null, ?PolydockAppInstanceStatus $foundStatus = null)
    {
        parent::__construct($message, $code, $previous);
        $this->expectedStatus = $expectedStatus;
        $this->foundStatus = $foundStatus;
    }

    /**
     * Get the expected status of the app instance
     * @return PolydockAppInstanceStatus|null The expected status of the app instance
     */
    public function getExpectedStatus(): ?PolydockAppInstanceStatus
    {
        return $this->expectedStatus;
    }
    
    /**
     * Get the found status of the app instance
     * @return PolydockAppInstanceStatus|null The found status of the app instance
     */
    public function getFoundStatus(): ?PolydockAppInstanceStatus
    {
        return $this->foundStatus;
    }
} 
