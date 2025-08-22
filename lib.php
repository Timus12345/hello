<?php

/**
 * @author Revko Rustam
 * @copyright 20.08.2025
 */

declare(strict_types=1);

defined('MOODLE_INTERNAL') || die();

function hello_add_instance(stdClass $hello): int
{
    global $DB;
    $hello->timecreated = time();
    $hello->course = $hello->course ?? 0;
    return (int)$DB->insert_record('hello', $hello);
}

function hello_update_instance(stdClass $hello): bool
{
    global $DB;
    $hello->timemodified = time();
    $hello->id = (int)$hello->instance;
    return $DB->update_record('hello', $hello);
}

function hello_delete_instance(int $id): bool
{
    global $DB;
    if (!$hello = $DB->get_record('hello', ['id' => $id])) {
        return false;
    }
    return (bool)$DB->delete_records('hello', ['id' => $id]);
}