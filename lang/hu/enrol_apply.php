<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    enrol_apply
 * @copyright  emeneo.com (http://emeneo.com/)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     emeneo.com (http://emeneo.com/)
 * @author     Johannes Burk <johannes.burk@sudile.com>
 */

// The name of your plug-in. Displayed on admin menus.
['enrolname'];'Course enrol confirmation';
['pluginname'];'Course enrol confirmation';
['pluginname_desc'];'With this plug-in users can apply to be enrolled in a course. A teacher or site manager will then have to approve the enrolment before the user gets enroled.';

['confirmmail_heading'];'Confirmation email';
['confirmmail_desc'];'';
['confirmmailsubject'];'Confirmation email subject';
['confirmmailsubject_desc'];'';
['confirmmailcontent'];'Confirmation email content';
['confirmmailcontent_desc'];'Please use the following special marks to replace email content with data from Moodle.<br/>{firstname}:The first name of the user; {content}:The course name;{lastname}:The last name of the user;{username}:The users registration username;{timeend}: The enrolment expiration date';

['waitmail_heading'];'Waiting list email';
['waitmail_desc'];'';
['waitmailsubject'];'Waiting list mail subject';
['waitmailsubject_desc'];'';
['waitmailcontent'];'Waiting list mail content';
['waitmailcontent_desc'];'Please use the following special marks to replace email content with data from Moodle.<br/>{firstname}:The first name of the user; {content}:The course name;{lastname}:The last name of the user;{username}:The users registration username';

['cancelmail_heading'];'Cancelation email';
['cancelmail_desc'];'';
['cancelmailsubject'];'Cancelation email subject';
['cancelmailsubject_desc'];'';
['cancelmailcontent'];'Cancelation email content';
['cancelmailcontent_desc'];'Please use the following special marks to replace email content with data from Moodle.<br/>{firstname}:The first name of the user; {content}:The course name;{lastname}:The last name of the user;{username}:The users registration username';

['notify_heading'];'Notification settings';
['notify_desc'];'Define who gets notified about new enrolment applications.';
['notifycoursebased'];"New enrolment application notification (instance based, eg. course teachers)";
['notifycoursebased_desc'];"Default for new instances: Notify everyone who have the 'Manage apply enrolment' capability for the corresponding course (eg. teachers and managers)";
['notifyglobal'];"New enrolment application notification (global, eg. global managers and admins)";
['notifyglobal_desc'];"Define who gets notified about new enrolment applications for any course.";

['messageprovider:application'];'Course enrolment application notifications';
['messageprovider:confirmation'];'Course enrolment application confirmation notifications';
['messageprovider:cancelation'];'Course enrolment application cancelation notifications';
['messageprovider:waitinglist'];'Course enrolment application defer notifications';

['newapplicationnotification'];'There is a new course enrolment application awaiting review.';
['applicationconfirmednotification'];'Your course enrolment application was confirmed.';
['applicationcancelednotification'];'Your course enrolment application was canceled.';
['applicationdeferrednotification'];'Your course enrolment application was deferred (you are currently on the waiting list).';

['confirmusers'];'Enrol Confirm';
['confirmusers_desc'];'Users in gray colored rows are on the waiting list.';

['coursename'];'Course';
['applyuser'];'First name / Surname';
['applyusermail'];'Email';
['applydate'];'Enrol date';
['btnconfirm'];'Confirm requests';
['btnwait'];'Defer requests';
['btncancel'];'Cancel requests';
['enrolusers'];'Enrol users';

['status'];'Allow Course enrol confirmation';
['newenrols'];'Allow new course enrol request';
['confirmenrol'];'Manage application';

['apply:config'];'Configure apply enrol instances';
['apply:manage'];'Manage user enrolments';
['apply:manageapplications'];'Manage apply enrolment';
['apply:unenrol'];'Cancel users from the course';
['apply:unenrolself'];'Cancel self from the course';

['notification'];'<b>Enrolment application successfully sent</b>. <br/><br/>You will be informed by email when your enrolment has been confirmed.';

['mailtoteacher_suject'];'New Enrolment request!';
['editdescription'];'Textarea description';
['comment'];'Comment';
['applycomment'];'Comment';
['applymanage'];'Manage enrolment applications';

['status_desc'];'Allow course access of internally enrolled users.';
['user_profile'];'User Profile';

['show_standard_user_profile'];'Show standard user profile fields on enrolment screen';
['show_extra_user_profile'];'Show extra user profile fields on enrolment screen';

//['custom_label'];'Custom label "{replace_title}"';
['custom_label'];'Custom label';

['maxenrolled'];'Max enrolled users';
['maxenrolled_help'];'Specifies the maximum number of users that can self enrol. 0 means no limit.';
['maxenrolledreached_left'];'Maximum number of users allowed';
['maxenrolledreached_right'];'has already been reached.';

['cantenrol'];'Enrolment is disabled or inactive';

['maxenrolled_tip_1'];'out of';
['maxenrolled_tip_2'];'seats already booked.';

['defaultperiod'];'Default enrolment duration';
['defaultperiod_desc'];'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
['defaultperiod_help'];'Default length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited by default.';
['expiry_heading'];'Expiry settings';
['expiry_desc'];'';
['expiredaction'];'Enrolment expiry action';
['expiredaction_help'];'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';

['submitted_info'];'Enrol info';
['privacy:metadata'];'The Course enrol confirmation plugin does not store any personal data.';

['enrolperiod'];'Enrolment duration';
['enrolperiod_desc'];'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
['enrolperiod_help'];'Length of time that the enrolment is valid, starting with the moment the user enrols themselves. If disabled, the enrolment duration will be unlimited.';

['expirynotifyall'];'Teacher and enrolled user';
['expirynotifyenroller'];'Teacher only';

['group'];'Group assignement';
['group_help'];'You can assign none or multiples groups';

['opt_commentaryzone'];'Commentary field';
['opt_commentaryzone_help'];'Yes -> Enable the commentary field in the enrol form';

['expirymessageenrollersubject'];'Apply enrolment expiry notification';
['expirymessageenrollerbody'];'Apply enrolment in the course \'{$a->course}\' will expire within the next {$a->threshold} for the following users:

    {$a->users}

To extend their enrolment, go to {$a->extendurl}';
['expirymessageenrolledsubject'];'Apply enrolment expiry notification';
['expirymessageenrolledbody'];'Dear {$a->user},

This is a notification that your enrolment in the course \'{$a->course}\' is due to expire on {$a->timeend}.

If you need help, please contact {$a->enroller}.';

['sendexpirynotificationstask'];"Apply enrolment send expiry notifications task";

['messageprovider:expiry_notification'];'Apply enrolment expiry notifications';

