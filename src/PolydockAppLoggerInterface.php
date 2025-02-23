<?php

namespace FreedomtechHosting\PolydockApp;

interface PolydockAppLoggerInterface
{
    /**
     * Log an informational message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function info(string $message, array $context = []): void;

    /**
     * Log an error message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function error(string $message, array $context = []): void;

    /**
     * Log a warning message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function warning(string $message, array $context = []): void;

    /**
     * Log a debug message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function debug(string $message, array $context = []): void;
}
