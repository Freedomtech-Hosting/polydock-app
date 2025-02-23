<?php

namespace FreedomtechHosting\PolydockApp\Loggers;

use FreedomtechHosting\PolydockApp\PolydockAppLoggerInterface;

class PolydockAppEchoLogger implements PolydockAppLoggerInterface
{
    /**
     * Log an informational message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function info(string $message, array $context = []): void
    {
        $this->output('INFO', $message, $context);
    }

    /**
     * Log an error message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function error(string $message, array $context = []): void
    {
        $this->output('ERROR', $message, $context);
    }

    /**
     * Log a warning message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function warning(string $message, array $context = []): void
    {
        $this->output('WARNING', $message, $context);
    }

    /**
     * Log a debug message
     * @param string $message The message to log
     * @param array $context Additional context data for the log entry
     * @return void
     */
    public function debug(string $message, array $context = []): void
    {
        $this->output('DEBUG', $message, $context);
    }

    /**
     * Output the log message with level and context
     * @param string $level The log level
     * @param string $message The message to log
     * @param array $context Additional context data
     * @return void
     */
    private function output(string $level, string $message, array $context): void
    {
        echo "[$level] $message" . PHP_EOL;
        if (!empty($context)) {
            echo "Context: " . json_encode($context, JSON_PRETTY_PRINT) . PHP_EOL;
        }
    }
} 