<?php

/**
 * @author Revko Rustam
 * @copyright 20.08.2025
 */

declare(strict_types=1);

defined('MOODLE_INTERNAL') || die();

/**
 * @var stdClass $CFG
 */

require_once($CFG->dirroot . '/course/moodleform_mod.php');

class mod_hello_mod_form extends moodleform_mod {
    public function definition(): void {
        $mform = $this->_form;

        $mform->addElement('text', 'name', get_string('modulename', 'hello'), ['size' => '64']);
        $mform->setType('name', PARAM_TEXT);
        $mform->setDefault('name', get_string('modulename', 'hello'));

        $this->standard_intro_elements();

        $this->standard_coursemodule_elements();
        $this->add_action_buttons();
    }
}