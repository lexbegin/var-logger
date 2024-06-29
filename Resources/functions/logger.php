<?php
/**
 * File: logger.php
 * Author: Alexandru Marinescu
 * Date: 28.06.2024
 *
 * Provides a convenient global function for logging messages using the DebugLogger class.
 */

declare(strict_types=1);

use LexBegin\VarLogger\DebugLogger;

if (!function_exists('dLog')) {

    /**
     * Logs a message using the DebugLogger class.
     *
     * This function provides a convenient global way to log messages. If no log file is specified,
     * the default log file defined in DebugLogger is used.
     *
     * @param string|\Stringable $message The message to log. This can be a string or any object implementing the Stringable interface.
     * @param string|null $logFile The file path where the log should be written. Defaults to null.
     * @return void
     */
    function dLog(string|\Stringable $message, ?string $logFile = null): void
    {
        DebugLogger::log($message, $logFile);
    }
}