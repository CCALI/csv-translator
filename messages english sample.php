<?php

return [
  //index.blade.php
  'welcome_a2j' => "Welcome to A2J.org.",
  'a2j_stands' => 'A2J stands for Access To Justice.  This website hosts A2J
  Guided Interviews® that are interactive programs that help
  self-represented litigants (SRLs) fill out a legal form or
  document or complete a process.  These A2J Guided Interviews®
  are written by attorneys, law students and volunteers
  for the general public to use.  Using this website and
  running a A2J Guided Interviews® does not create an attorney-client relationship
  with CALI or the authors of the A2J Guided Interviews®.',
  'we_love_feedback' => 'We love feedback on how we can improve this site, but we
  cannot offer legal advice.',
  'use_this_link' => 'Use this link to provide feedback.',
  'there_are_guides_in' => 'There are active A2J Guided Interviews® in the following states/provinces:',
  'current_guides_in' => 'Current Live A2J Guided Interviews® in :region',
  'click_link_to_run' => 'Click link to run an A2J Guided Interview®. No account required unless you would
  like to save your answers.',
  'a2j_guided_interview_name' => 'A2J Guided Interview® Name',
  'a2j_guided_interview_desc' => 'A2J Guided Interview® Description',
  'a2j_guided_interview_in_test_newest' => 'A2J Guided Interview® in test (Newest 10)',
  'see_all' => 'See All',

  //guides_test.blade
  'a2j_guided_interview_in_test' => 'All A2J Guided Interviews® in test',

  //about.blade.php
  'about_cali' => 'About CALI',
  'about_cali_text' => 'The Center for Computer-Assisted Legal Instruction (CALI)
  is a 501(c)(3) non-profit consortium of law schools, law
  libraries and related organizations. Almost every United
  States law school is a member of CALI and they make up the
  bulk of our membership.  In keeping with our Mission
  Statement, CALI conducts applied research and development
  in the area of computer-mediated legal education and
  creates tools that increase access to justice.',
  'about_a2jorg' => 'About A2J.org',
  'about_a2jorg_text' => 'A2J.org was developed by CALI to close the justice gap.
  The site allows law students to practice by providing a place to
  demonstrate their proficiency in legal automation, allows self
  represented litigants access to tools thatcan help them solve their
  problems.',
  'faq' => 'Frequently Asked questions (FAQ)',
  'how_are_accounts' => 'How are accounts secured?:',
  'passwords_bcrypt' => 'Passwords are hashed with bcrypt. A2J.org uses https secured with
  an SSL certificate from letsencrypt. This means that when accessing
  the site, any actions performed on the site are invisible to third
  parties. Answers are encrypted with AES-256 encryption and stored
  on encrypted Amazon AWS volumes.',
  'how_long_data' => 'How long is data stored:',
  'data_is_stored' => 'Data is stored for 1 year since last account login.',
  'can_i_delete' => 'Can I delete my data?:',
  'individual_answer_files' => 'Individual answer files can be deleted by clicking the trashcan
  icon. All answer files can be deleted at once by going to settings
  and selecting delete all Answer Files. Accounts can be
  deleted at once by going to settings and selecting delete account.',
  'do_you_use_cookies' => 'Do you use cookies?:',
  'session_cookies_are' => 'Session cookies are used to keep you logged in to the site and for
  securing your account data. Tracking cookies are used to collect
  anonimized data used for improving the A2J Viewer software and
  A2J Guided Interviews®.',
  'what_data_collected' => 'What data is collected from me?:',
  'session_cookies_analytics' => 'Session cookies are used to keep you logged in to the site and for
  securing your account data. When running an A2J Guided Interview®,
  anonimized analytics are collected and sent to our servers for the
  purpose of improving the software and A2J Guided Interview®',
  'use_google_analytics' => 'Do you use Google Analytics?:',
  'cali_uses_matomo' =>  'No. CALI uses Matomo analytics.',

  //feedback.blade
  'feedback' => 'Feedback',
  'your_email' => 'Your email (optional)',
  'your_feedback' => 'Your feedback',
  'submit_feedback' => 'Submit feedback',

  //layouts.app.blade
  'Hello' => 'Hello, :name',
  'Language' => 'Language',
  'Login' => 'Login',
  'Logout' => 'Logout',
  'Register' => 'Register',
  'Settings' => 'Settings',
  'my_guided_interviews' => 'My Guided Interviews',
  'my_answers' => 'My Answers',
  'about' => 'About',
  'FAQ' => 'FAQ',
  'TOS' => 'Terms of Service',
  'privacy_policy' => 'Privacy Policy',

  //welcome.blade.php
  'Home' => 'Home',
  'description' => 'description',

  //users.list_guides.blade.php
  'list_guides' => 'List Guides',
  'upload' => 'Upload',
  'you_have_no_answers' => 'You have not saved any answers. ',
  'click_here_to_select' => 'Click here
  to select an A2J Guided Interview®.',
  'a2j_guides_with_saved' => 'A2J Guided Interviews® with saved answers',


  //users.account_deleted.blade.php
  'thank_you' => 'Thank you',
  'account_deleted' => 'Your account has been deleted. Thank you for using A2J.org.',

  //layouts.guide.blade
  'error' => 'Error: ',

  //guides.save_answer
  'given_name' => 'Given Name',
  'family_name' => 'Family Name',
  'email_address' => 'E-Mail Address',
  'password' => 'Password',
  'confirm_password' => 'Confirm Password',
  'register_and_proceed' => 'Register and Proceed to Save Answers',
  'save_answers' => 'Save Answers',
  'answer_title' => 'Answer title',
  'comments' => 'Comments',
  'register_and_save' =>'Register and Save Answers',

  //guides.run_guide
  'watermark' => 'For demonstration and testing purposes only.
  Not intended for use by the public.
  This A2J guided interview will not produce a usable form.
  This guide is for demonstration purposes only!',

  //guides.login_or_register_to_save
  'no_account_no_problem' => 'No account? No problem.',
  'remember_me' => 'Remember Me',
  'forgot_password' => 'Forgot Your Password?',

  //guides.load-answers-menu.blade
  'list_answers' => 'List Answers',
  'delete_saved_answers' => 'Delete Saved Answers',
  'upload_answers' => 'Upload Answers',
  'email_answers' => 'E-mail Answers',
  'a2j_gi_no_longer_available' => '[A2J Guided Interview® no longer available]',
  'you_can_load_or' => 'You can load an answerfile below',
  'run_a2j_gi' => 'Run A2J Guided Interview®:',
  'without_loading' => 'without loading an answer',
  'you_can_load_an_answer' => 'You can load an answerfile below',
  'run_a2j_gi_without' => 'If you do not wish to load an answer,
  click here to run A2J Guided Interview®: :guide_name without
  loading an answer.',
  'your_saved_answers'=>'Your Saved Answers for this A2J Guided Interview®',

  'click_play' => 'click :play_symbol to load A2J Guided Interview® with saved answers',
  'unencrypted' => 'unencrypted: ',

  //guides.consent.blade.php
  'before_you_proceed' => 'Before you proceed,
   you must agree to our policies. They are listed below:', //[guide_name]
  'you_are_about_to_run' => 'You are about to run
  the following A2J Guided Interview®: :guide_name',
  'terms_of_use'=>'Terms of Use',
  'priv_policy' => 'Privacy Policy',
  'I_agree' => 'I Agree to the a2j.org Privacy and Terms
   of Use policies',
   'you_are_logged_in_and_will' => 'You are logged in and will be able to save
   answers if this A2J Guided Interview® allows.
   Click below to run A2J Guided Interview®.',
   'run_logged_in' => 'Run while logged in',
   'no_account_required' => 'No account is required to run an A2J Guided Interview®.
   If the A2J Guided Interview® allows you to save answers,
   you will be prompted to create an account at the end.',
   'run_without_account'=>'Run without account',
   'create_account_and_run' => 'If you would like to create an account or
   use an existing one to run this interview,
   click the button below.',
   'login_and_run' => 'Login and Run A2J Guided Interview®',

   //guides.modals.delete-answer.blade.php
   'are_you_sure_delete_answer' => 'Are you sure you would like to delete this answer?',
   'Delete' => 'Delete Answer',
   'Close' => 'Close Menu',

   //feedback.thanks.blade.php
   'thank_you_ex' => 'Thank you!',
   'thank_you_feedback' => 'Thank you for your feedback!',

   //errors.500.1
   'error_bad_key' => 'Sorry, there was an error (BAD_KEY).',

   //errors.498
   'error_token_expired' => 'Sorry, token expired or otherwise invalid. Please refresh page.',

   //errors.494
   'error_494' => 'Error 494 not found.',

   //errors.440
   'error_bad_hash' => 'Sorry, there was an error (BAD_HASH).',


   //errors.405
   'method_not_allowed' => 'Method not allowed',

   //errors.404
   '404' => 'Sorry, that page does not exist',

   //errors.403
   'error_forbidden' => 'Sorry, access to this page is forbidden.',

   //errors.401
   'error_unauthorized' => 'Sorry, you are not authorized to access this page.',
   'try_logging_in' => 'try logging in',

   //answers.mail-answer.blade.php
   'Recipients' => 'Recipients',
   'Message' => 'Message',
   'send_email' => 'send E-mail',
   //'Close' => 'Close',

   //answers.list-answers.blade.php
   'click_here_upload_answer' => 'Click here to upload an answer.',
   'click_here_upload_answer_enc' => 'Click here to upload an unencrypted answer.',
   'You have not saved any answers.',
   'click_here_to_run' => 'Click here to run an A2J Guided Interview®.',
   'load_answer_below' => 'Load an answer below.',
   'my_saved_answers' => 'My Saved Answers',
   'load_answer_run' => 'load answer and run guide',
   'download_answer' => 'download answer',
   'delete_answer' => 'delete answer',
   'upload_answer' => 'upload_answers',

   //answers.edit-answers.blade.php
   '' => '',

   //answers.delete-answer.blade.php
   'confirm_deletion' => 'Confirm Deletion of Answerfile',
   'delete_answer_warning' => 'Are you sure you would like to delete this answer?
   THIS CANNOT BE UNDONE!',

   //answers.modals.upload-clear-answer.blade.php
    'upload_answer_file' => 'Upload Answer File',
    'a2jgi_circleR' => 'A2J Guided Interviews®',
    'Cancel' => 'Cancel',

    //answers.modals.upload-clear-answer.blade.php
    'email_answerfile' => 'E-Mail Answerfile',

    //answers.modals.edit-answer.blade.php
    'edit_answer_file' => 'Edit Answer File',
    'Update' => 'Update',

    //answers.modals.download-answer.blade.php
    'download_answer_file' => 'download Answer File',

    //auth.confirm.blade.php
    'thank_you_confirm_email' => 'Thank you for confirming your e-mail address.',

    //auth.settings.blade.php
    'user_settings' => 'User Settings',
    'middle_names' => 'Middle Names',
    'locale' => 'Preferred Language',
    'timezone' => 'timezone',
    'danger_zone_enable_clear' => 'Danger Zone: Enable Unencrypted answers',
    'current_password' => 'Current Password',
    'new_password' => 'New Password',
    'confirm_new_password' => 'Confirm New Password',
    'click_here_to_enable_clear' => 'Click hereto enable unencrypted answers',
    'click_here_to_disable_clear' => 'Click here to disable unencrypted answers',
    'danger_zone_del_acct' => 'Danger Zone: Delete Account',
    //auth.resend_confirmation.blade.php


    //auth.delete-answers.blade.php

    //auth.passwords.reset.blade.php
    'reset_password' => 'Reset Password',

    //auth.passwords.email.blade.php
    'send_password_reset_link' => 'Send Password Reset Link',

    //auth.modals.email.blade.php
    'confirm_en_clear' => 'Confirm Enable Unencrypted Answers',
    'are_you_sure_en_clear' => 'Are you sure you would like to enable downloading unencrypted answers?
    Do not do this unless you know what you are doing.',
    'Enable' => 'Enable',
    'confirm_disable_unencrypted' => 'Confirm disable Unencrypted Answers',
    'are_you_sure_dis_clear' =>  'Are you sure you would like to disable downloading unencrypted answers?
    Do not do this unless you know what you are doing.',
    'Disable' => 'Disable',

    //auth.modals.delFiles.blade.php
    'confirm_delete_all' => 'Confirm Delete of All files',
    'are_you_sure_delete_all' => 'Are you sure you would like to delete all files stored on a2j.org?
    THIS CANNOT BE UNDONE!',
    'delete_all' => 'Delete all files',

    //auth.modals.delAnswers.blade.php
    'confirm_delete_all_ans' => 'Confirm Deletion of All Answerfiles?',
    'are_you_sure_delete_all_ans' => 'Are you sure you would like to delete all of your stored answerfiles?
    THIS CANNOT BE UNDONE!',
    'delete_all_ans' => 'Delete all answers',

    //auth.modals.delAccount.blade.php
    'confirm_delete_acct' => 'Confirm Deletion of of your account?',
    'are_you_sure_delete_all_ans' => 'Are you sure you would like to delete your account?
    This will delete all of your history and answerfiles.
    THIS CANNOT BE UNDONE!',
    'delete_account' => 'Delete account',

    //AnswersControllerOld
    'interview_data_saved'=>'interview data saved',

    //AuthorDashboardController
    'invalid_guide' => 'invalid guide',
    'password_incorrect' => 'password incorrect',
    'passwords_dont_match' => 'passwords do not match',

    'Languages' => 'Languages',
    'English' => 'English',
    'Spanish' => 'Spanish',
    'Vietnamese' => 'Vietnamese',
    'select_your_lang' => 'Select your preferred language',

];
