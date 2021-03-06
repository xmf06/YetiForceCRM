<?php
/* {[The file is published on the basis of YetiForce Public License that can be found in the following directory: licenses/License.html]} */

$DEBUG_CONFIG = [
	/* +***************************************************************
	 * 	CRM 
	 * ************************************************************** */
	// Enable log4php -> cache/logs/system.log
	'LOG4PHP_DEBUG' => false,
	// Stop the running process of the system if there is and error in sql query
	'SQL_DIE_ON_ERROR' => false,
	// Displays information about the tracking code when an error occurs. Available only with the active SQL_DIE_ON_ERROR = true
	'DISPLAY_DEBUG_BACKTRACE' => false,
	// Debug Viewer => cache/logs/viewer-debug.log
	'DEBUG_VIEWER' => false,
	// Display Smarty Debug Console
	'DISPLAY_DEBUG_VIEWER' => false,
	/* +***************************************************************
	 * Configure a user-defined error handler function
	 * ************************************************************** */
	'EXCEPTION_ERROR_HANDLER' => false,
	// Save logs to file
	'EXCEPTION_ERROR_TO_FILE' => false,
	// Display errors
	'EXCEPTION_ERROR_TO_SHOW' => false,
	// Set the error reporting level. The parameter is either an integer representing a bit field, or named constants.  
	// https://secure.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting
	// All errors - E_ALL & ~E_NOTICE
	// Critical errors - E_ERROR | E_WARNING | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR
	'EXCEPTION_ERROR_LEVEL' => E_ALL & ~E_NOTICE,
	/* +***************************************************************
	 * 	API 
	 * ************************************************************** */
	// Sabre dav - This is a flag that allow or not showing file, line and code of the exception in the returned XML
	'DAV_DEBUG_EXCEPTIONS' => false,
	// Activate the plugin recording log in DAV
	'DAV_DEBUG_PLUGIN' => false,
	// Show errors messages in web service
	'WEBSERVICE_SHOW_ERROR' => false,
	// web service logs
	'WEBSERVICE_DEBUG' => false,
	
	/* +***************************************************************
	 * 	ROUNDCUBE MAIL
	 * ************************************************************** */
	// System error reporting, sum of: 1 = log; 4 = show, 8 = trace
	'ROUNDCUBE_DEBUG_LEVEL' => 1,
	// Devel_mode this will print real PHP memory usage into logs/console and do not compress JS libraries
	'ROUNDCUBE_DEVEL_MODE' => false,
	// Activate this option if logs should be written to per-user directories.
	// Data will only be logged if a directry cache/logs/<username>/ exists and is writable.
	'ROUNDCUBE_PER_USER_LOGGING' => false,
	// Log sent messages to cache/logs/sendmail or to syslog
	'ROUNDCUBE_SMTP_LOG' => false,
	// Log successful/failed logins to cache/logs/userlogins or to syslog
	'ROUNDCUBE_LOG_LOGINS' => false,
	// Log session authentication errors to cache/logs/session or to syslog
	'ROUNDCUBE_LOG_SESSION' => false,
	// Log SQL queries to cache/logs/sql or to syslog
	'ROUNDCUBE_SQL_DEBUG' => false,
	// Log IMAP conversation to cache/logs/imap or to syslog
	'ROUNDCUBE_IMAP_DEBUG' => false,
	// Log LDAP conversation to cache/logs/ldap or to syslog
	'ROUNDCUBE_LDAP_DEBUG' => false,
	// Log SMTP conversation to cache/logs/smtp or to syslog
	'ROUNDCUBE_SMTP_DEBUG' => false,
];
