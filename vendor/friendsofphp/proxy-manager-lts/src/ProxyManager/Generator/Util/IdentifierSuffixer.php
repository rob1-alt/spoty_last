<?php

declare(strict_types=1);

namespace ProxyManager\Generator\Util;

use Composer\InstalledVersions;

use function class_exists;
use function method_exists;
use function preg_match;
use function serialize;
use function sha1;
use function substr;

/**
 * Utility class capable of generating
 * valid class/property/method identifiers
 * with a deterministic attached suffix,
 * in order to prevent property name collisions
 * and tampering from userland
 */
abstract class IdentifierSuffixer
{
    public const VALID_IDENTIFIER_FORMAT = '/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]+$/';
    public const DEFAULT_IDENTIFIER      = 'g';

    final private function __construct()
    {
    }

    /**
     * Generates a valid unique identifier from the given name,
     * with a suffix attached to it
     */
    public static function getIdentifier(string $name): string
    {
        /** @var string|null $salt */
        static $salt;

        $salt = $salt ?? self::loadBaseHashSalt();
        $suffix = substr(sha1($name . $salt), 0, 5);

        if (! preg_match(self::VALID_IDENTIFIER_FORMAT, $name)) {
            return self::DEFAULT_IDENTIFIER . $suffix;
        }

        return $name . $suffix;
    }

    private static function loadBaseHashSalt(): string
    {
        if (! class_exists(InstalledVersions::class)) {
            return self::class;
        }

        return sha1(serialize(
            method_exists(InstalledVersions::class, 'getAllRawData')
                ? InstalledVersions::getAllRawData() // Composer >= 2.0.14
                : InstalledVersions::getRawData()
        ));
    }
}
