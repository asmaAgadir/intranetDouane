<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Invalid username or password',
    'User account is disabled.' => 'User account is disabled.',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username:',
    'security.login.password' => 'Password:',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address:',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name:',
    'form.username' => 'Username:',
    'form.email' => 'Email:',
    'form.current_password' => 'Current password:',
    'form.password' => 'Password:',
    'form.password_confirmation' => 'Verification:',
    'form.new_password' => 'New password:',
    'form.new_password_confirmation' => 'Verification:',
  ),
  'CCDNForumForumBundle' => 
  array (
    'next' => 'Next',
    'previous' => 'Previous',
    'dashboard.pages.forum' => 'Forum',
    'dashboard.pages.community' => 'Community',
    'dashboard.categories.forum' => 'Forum',
    'dashboard.categories.community' => 'Community',
    'dashboard.links.forum' => 'Forum Index',
    'dashboard.links.subscriptions' => 'Forum Subscriptions',
    'layout.header_links.forum' => 'Forum',
    'title.admin.index' => 'Admin Index',
    'title.admin.manage-forums.index' => 'Manage Forums',
    'title.admin.manage-forums.create' => 'Create New Forum',
    'title.admin.manage-forums.edit' => 'Edit Forum %forum_name%',
    'title.admin.manage-forums.delete' => 'Delete Forum %forum_name%',
    'title.admin.manage-categories.index' => 'Manage Categories',
    'title.admin.manage-categories.create' => 'Create New Category',
    'title.admin.manage-categories.edit' => 'Edit Category %category_name%',
    'title.admin.manage-categories.delete' => 'Delete Category %category_name%',
    'title.admin.manage-boards.index' => 'Manage Boards',
    'title.admin.manage-boards.create' => 'Create New Board',
    'title.admin.manage-boards.edit' => 'Edit Board %board_name%',
    'title.admin.manage-boards.delete' => 'Delete Board %board_name%',
    'title.category.index' => 'Index',
    'title.category.show' => '%category_name% Category',
    'title.board.show' => '%board_name% Board',
    'title.topic.show' => 'Topic: %topic_title%',
    'title.topic.create' => 'Create Topic',
    'title.topic.reply' => 'Reply to Topic',
    'title.topic.edit' => 'Edit Topic',
    'title.topic.delete' => 'Delete Topic',
    'title.topic.change_board' => 'Change Board For Topic',
    'title.post.show' => 'Post #%post_id%',
    'title.post.edit' => 'Edit Post #%post_id%',
    'title.post.delete' => 'Delete Post #%post_id%',
    'title.subscription.index' => 'Subscriptions',
    'crumbs.admin.index' => 'Admin Index',
    'crumbs.admin.manage-forums.index' => 'Manage Forums',
    'crumbs.admin.manage-forums.create' => 'Create New Forum',
    'crumbs.admin.manage-forums.edit' => 'Edit Forum %forum_name%',
    'crumbs.admin.manage-forums.delete' => 'Delete Forum %forum_name%',
    'crumbs.admin.manage-categories.index' => 'Manage Categories',
    'crumbs.admin.manage-categories.create' => 'Create New Category',
    'crumbs.admin.manage-categories.edit' => 'Edit Category %category_name%',
    'crumbs.admin.manage-categories.delete' => 'Delete Category %category_name%',
    'crumbs.admin.manage-boards.index' => 'Manage Boards',
    'crumbs.admin.manage-boards.create' => 'Create New Board',
    'crumbs.admin.manage-boards.edit' => 'Edit Board %board_name%',
    'crumbs.admin.manage-boards.delete' => 'Delete Board %board_name%',
    'crumbs.moderator.topic.move' => 'Move Topic',
    'crumbs.moderator.topic.delete' => 'Delete Topic',
    'crumbs.user.category.index' => 'Forum Index',
    'crumbs.user.topic.create' => 'Create New Topic',
    'crumbs.user.topic.reply' => 'Reply to Topic',
    'crumbs.user.topic.delete' => 'Delete Topic',
    'crumbs.user.post.edit' => 'Edit Post: #',
    'crumbs.user.post.delete' => 'Delete Post: #',
    'crumbs.user.subscription.index' => 'Subscriptions',
    'link.edit' => 'Edit',
    'link.delete' => 'Delete',
    'link.unassigned' => 'Unassigned',
    'link.admin.index' => 'Admin',
    'link.forum.index' => 'Forum',
    'link.forum.create' => 'Create New Forum',
    'link.category.index' => 'Forum Index',
    'link.category.create' => 'Create New Category',
    'link.board.create' => 'Create New Board',
    'link.topic.create' => 'Create New Topic',
    'link.topic.reply' => 'Reply',
    'link.topic.subscribe' => 'Subscribe',
    'link.topic.unsubscribe' => 'Unsubscribe',
    'link.topic.close' => 'Close Topic',
    'link.topic.reopen' => 'Reopen Topic',
    'link.topic.delete' => 'Delete Topic',
    'link.topic.restore' => 'Restore Topic',
    'link.topic.change_board' => 'Change Board',
    'link.topic.sticky' => 'Sticky Topic',
    'link.topic.unsticky' => 'Unsticky Topic',
    'link.post.quote' => 'Quote',
    'link.post.delete' => 'Delete',
    'link.post.restore' => 'Restore',
    'link.post.lock' => 'Lock',
    'link.post.unlock' => 'Unlock',
    'link.subscription.index' => 'Subscriptions',
    'form.required' => 'This field is required',
    'form.button.confirm-delete' => 'Confirm Delete',
    'form.button.save' => 'Save',
    'form.button.save-changes' => 'Save Changes',
    'form.button.topic.create' => 'Publish Topic',
    'form.button.topic.reply' => 'Publish Reply',
    'form.button.topic.move' => 'Move Topic',
    'form.button.preview' => 'Preview',
    'form.button.cancel' => 'Cancel',
    'form.button.yes' => 'Yes',
    'form.button.no' => 'No',
    'filter.forums' => 'Forums',
    'filter.categories' => 'Categories',
    'forum.label' => 'Forum: ',
    'forum.id-th' => 'ID',
    'forum.name-th' => 'Name',
    'forum.category-count-th' => 'Category Count',
    'forum.name-label' => 'Name: ',
    'forum.roles.board-view-label' => 'Board View Roles:',
    'forum.confirm-delete-label' => 'I confirm I want to delete this Forum.',
    'forum.confirm-delete-subordinates-label' => 'Also delete categories, boards and topics.',
    'category.label' => 'Category',
    'category.id-th' => 'ID',
    'category.name-th' => 'Name',
    'category.board-count-th' => 'Board Count',
    'category.name-label' => 'Name: ',
    'category.confirm-delete-label' => 'I confirm I want to delete this Category.',
    'category.confirm-delete-subordinates-label' => 'Also delete boards and topics.',
    'category.roles.board-view-label' => 'Board View Roles:',
    'category.index' => 'Forum Index',
    'category.none' => 'There are no categories.',
    'category.no-boards' => 'There are no boards for this category.',
    'board.th' => 'Board',
    'board.id-th' => 'ID',
    'board.name-th' => 'Name',
    'board.topic-th' => 'Topic',
    'board.topics-th' => 'Topics',
    'board.view-count-th' => 'Views',
    'board.reply-count-th' => 'Replies',
    'board.topic-count-th' => 'Topics',
    'board.post-count-th' => 'Posts',
    'board.last-post-th' => 'Last Post',
    'board.announcements-th' => 'Announcements',
    'board.label' => 'Board: ',
    'board.name-label' => 'Name: ',
    'board.topic-count-label' => 'Topics: ',
    'board.post-count-label' => 'Posts: ',
    'board.description-label' => 'Description: ',
    'board.confirm-delete-label' => 'I confirm I want to delete this Board.',
    'board.confirm-delete-subordinates-label' => 'Also delete topics.',
    'board.roles.topic-create-label' => 'Topic Create Roles: ',
    'board.roles.topic-view-label' => 'Topic View Roles: ',
    'board.roles.topic-reply-label' => 'Topic Reply Roles: ',
    'board.no-topics' => 'There are no topics for this board, be the first to post one!',
    'topic.label' => 'Topic: ',
    'topic.board-label' => 'Board: ',
    'topic.title-label' => 'Title: ',
    'topic.confirm-delete-label' => 'I confirm I want to delete this Topic.',
    'topic.subscription-count-label' => 'Subscribers: ',
    'topic.view-count-label' => 'Views: ',
    'topic.reply-count-label' => 'Replies: ',
    'topic.transcript' => 'Transcript.',
    'topic.closed-by' => 'Closed by ',
    'topic.deleted-by' => 'Deleted by ',
    'topic.stickied-by' => 'Stickied by %name%',
    'topic.delete-confirm' => 'Are you sure you want to delete this topic?',
    'topic.badge.closed' => 'Closed',
    'post.preview' => 'Preview',
    'post.posted-by' => 'Posted by ',
    'post.edited-by' => 'Edited by ',
    'post.deleted-by' => 'Deleted by ',
    'post.locked-by' => 'Locked by ',
    'post.confirm-delete-label' => 'I confirm I want to delete this Post.',
    'post.body-label' => 'Body:',
    'post.subscribe-label' => 'Subscribe to this topic.',
    'post.unlock-until-label' => 'Unlock Until:',
    'post.has_been_locked' => 'This post has been locked.',
    'post.has_been_deleted' => 'This post has been deleted.',
    'post.user_post_count' => '{0} No Posts Yet|{1} %post_count% Post |[2, Inf] %post_count% Posts',
    'post.delete_confirm' => 'Are you sure you want to delete this post?',
    'post.show' => 'Show',
    'post.hide' => 'Hide',
    'subscription.no-topics' => 'You are not subscribed to any topics.',
    'subscription.all' => 'all',
    'subscription.unread' => 'unread',
    'subscription.read' => 'read',
    'flash.success.topic.create' => 'Successfully posted the new topic: %topic_title%.',
    'flash.success.topic.reply' => 'Successfully posted a reply to the topic: %topic_title%.',
    'flash.success.topic.move' => 'Successfully moved topic: %topic_title%.',
    'flash.success.topic.subscribe' => 'You subscribed to the topic %topic_title%.',
    'flash.success.topic.unsubscribe' => 'You unsubscribed from the topic %topic_title%.',
    'flash.success.post.edit' => 'Successfully edited #%post_id% of topic: %topic_title%.',
    'flash.success.post.delete' => 'Successfully deleted post: #%post_id%.',
    'flash.warning.topic.flood_control' => 'Flood Control - You have posted too much at once, take a break before posting again.',
    'flash.error.topic.reply.not_found' => 'The topic you are trying to reply to no longer exists.',
    'flash.error.topic.subscribe.not_found' => 'Topic could not be subscribed to because it was not found! Sorry about that.',
    'flash.error.board.topic_create.not_found' => 'The board you are trying to post to no longer exists! Sorry about that.',
  ),
));


return $catalogue;
