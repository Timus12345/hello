<?php
/**
 * @author Revko Rustam
 * @copyright 20.08.2025
 */

declare(strict_types=1);

require __DIR__ . '/../../config.php';

/**
 * @var \moodle_page $PAGE
 * @var \core_renderer $OUTPUT
 * @var stdClass $USER
 * @var int $id
 */

$id = required_param('id', PARAM_INT);
$cm = get_coursemodule_from_id('hello', $id, 0, false, MUST_EXIST);
assert($cm !== false);
$course = get_course($cm->course);

require_login($course, true, $cm);

$PAGE->set_url('/mod/hello/view.php', ['id' => $id]);
$PAGE->set_title(get_string('modulename', 'hello'));
$PAGE->set_heading($course->fullname);

echo $OUTPUT->header();
echo $OUTPUT->heading('Привет, ' . fullname($USER) . '!');
echo $OUTPUT->footer();