<?php return array (
  'plugins.importexport.users.displayName' => 'Doplněk pro import/export uživatelských dat ve formátu XML',
  'plugins.importexport.users.description' => 'Doplněk zajišťuje import/export uživatelských dat ve formátu XML',
  'plugins.importexport.users.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [sched_conf_path] [optional flags]
	export [xmlFileName] [sched_conf_path]
	export [xmlFileName] [sched_conf_path] [role_path1] [role_path2] ...

Optional flags:
	continue_on_error: If specified, do not stop importing users if an error occurs

	send_notify: If specified, send notification emails containing usernames
		and passwords to imported users

Examples:
	Import users into mySchedConf from myImportFile.xml, continuing on error:
	{$scriptName} {$pluginName} import myImportFile.xml mySchedConf continue_on_error

	Export all users from mySchedConf:
	{$scriptName} {$pluginName} export myExportFile.xml mySchedConf

	Export all users registered as reviewers, along with their reviewer roles only:
	{$scriptName} {$pluginName} export myExportFile.xml mySchedConf reviewer',
  'plugins.importexport.users.import.importUsers' => 'Import uživatelů',
  'plugins.importexport.users.import.instructions' => 'Prosím, zvolte XML soubor obsahující informace o uživatelích, které chcete importovat do této aktuální konference. Informace o struktuře a formátu tohoto souboru naleznete v nápovědě "scheduled conference help".<br /><br />Prosím, uvědomte si, že pokud importovaný soubor bude obsahovat uživatelská jména nebo emailové adresy takových uživatelů, kteří již v systému existují, jejich údaje z importovaného souboru nebudou použity a nově vzniklé role budou přiděleny již existujícím uživatelům.',
  'plugins.importexport.users.import.failedToImportUser' => 'Import uživatele se nezdařil',
  'plugins.importexport.users.import.failedToImportRole' => 'Přiřazení uživatele do role se nezdařilo',
  'plugins.importexport.users.import.dataFile' => 'Soubor uživatelských dat',
  'plugins.importexport.users.import.sendNotify' => 'Odeslat emailové oznámení všem importovaným uživatelům, kteří mají vyplněné položky: uživatelské jméno a heslo.',
  'plugins.importexport.users.import.continueOnError' => 'Pokračovat v importu dalších uživatelů i pokud došlo k chybě.',
  'plugins.importexport.users.import.noFileError' => 'Žádný soubor nebyl nahrán!',
  'plugins.importexport.users.import.usersWereImported' => 'Následující uživatelé byli úspěšně importování do systému',
  'plugins.importexport.users.import.errorsOccurred' => 'Při importu dat došlo k chybám',
  'plugins.importexport.users.import.confirmUsers' => 'Prosím, potvrďte, že chcete tyto uživatele importovat do systému',
  'plugins.importexport.users.import.warning' => 'Varování',
  'plugins.importexport.users.import.encryptionMismatch' => 'Není možné zpracovat hesla využívající šifrovací otisk: {$importHash}, protože systém OCS je nakonfigurován, tak aby využíval šifrovací otisk: {$ocsHash}. Budete-li pokračovat, bude nutné znovu nastavit hesla importovaným uživatelům.',
  'plugins.importexport.users.unknownSchedConf' => 'Byla uvedena neznámá cesta k plánované konferenci: "{$schedConfPath}".',
  'plugins.importexport.users.export.exportUsers' => 'Export uživatelů',
  'plugins.importexport.users.export.exportByRole' => 'Export dle rolí',
  'plugins.importexport.users.export.exportAllUsers' => 'Export všech dat',
  'plugins.importexport.users.export.errorsOccurred' => 'Během exportu dat došlo k chybám',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Nelze zapisovat do souboru "{$fileName}".',
); ?>