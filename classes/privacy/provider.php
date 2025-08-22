<?php

/**
 * @author Revko Rustam
 * @copyright 20.08.2025
 */

declare(strict_types=1);

namespace mod_hello\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem implementation for mod_hello.
 *
 * This plugin does not store any personal data.
 */
class provider implements \core_privacy\local\metadata\null_provider {

    /**
     * Get the language string identifier with the component’s language file
     * to explain why this plugin stores no data.
     *
     * @return string
     */
    public static function get_reason(): string {
        return 'privacy:metadata';
    }
}