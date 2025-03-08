<?php

namespace FreedomtechHosting\PolydockApp\Loggers;

use FreedomtechHosting\PolydockApp\PolydockAppLoggerInterface;

/**
 * A logger that caches log messages in a variable
 */
class PolydockAppCacheLogger implements PolydockAppLoggerInterface
{
    /**
     * The log messages
     * @var array
     */
    private array $logMessages = [];

    /**
     * Log an informational message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function info(string $message, array $context = []): void
    {
        $this->logMessages[] = [
            'level' => 'INFO',
            'message' => $message,
            'context' => $context
        ];
    }

    /**
     * Log an error message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function error(string $message, array $context = []): void
    {
        $this->logMessages[] = [
            'level' => 'ERROR',
            'message' => $message,
            'context' => $context
        ];
    }

    /**
     * Log a warning message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function warning(string $message, array $context = []): void
    {
        $this->logMessages[] = [
            'level' => 'WARNING',
            'message' => $message,
            'context' => $context
        ];
    }

    /**
     * Log a debug message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function debug(string $message, array $context = []): void
    {
        $this->logMessages[] = [
            'level' => 'DEBUG',
            'message' => $message,
            'context' => $context
        ];
    }

    /**
     * Get the log messages
     * @return array
     */
    public function getLogMessages(): array
    {
        return $this->logMessages;
    }
} 