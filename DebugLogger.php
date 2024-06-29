<?php
/**
 * File: DebugLogger.php
 * Author: Alexandru Marinescu
 * Date: 28.06.2024
 */
declare(strict_types=1);

namespace LexBegin\VarLogger;

use Stringable;

/**
 * Class DebugLogger
 *
 * Provides a simple logging utility to write debug information to a log file.
 */
class DebugLogger
{
    private const  LOG_FILE = '/tmp/debugLogger.log';
    private const  DATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * Logs a message to the specified log file.
     *
     * This method appends the provided message to the log file. If no log file is specified,
     * it defaults to '/tmp/debugLogger.log'.
     *
     * @param string|Stringable $message The message to log. This can be a string or any object implementing the Stringable interface.
     * @param string|null $logFile The file path where the log should be written. Defaults to self::LOG_FILE.
     * @return void
     */
    public static function log(string|Stringable $message, ?string $logFile = self::LOG_FILE): void
    {
        $timestamp = date(self::DATE_FORMAT);
        $logEntry = sprintf("[%s] %s", $timestamp, print_r((string)$message, true));

        file_put_contents($logFile ?? self::LOG_FILE, $logEntry . PHP_EOL, FILE_APPEND);
    }
}
