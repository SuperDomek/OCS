<?php return array (
  'plugins.importexport.native.displayName' => 'Doplněk pro import/export příspěvků ve formátu XML',
  'plugins.importexport.native.description' => 'Doplněk zajišťuje import a export příspěvků ve formátu XML',
  'plugins.importexport.native.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [conference_path] [sched_conf_path] [user_name] ...
	export [xmlFileName] [conference_path] [sched_conf_path] papers [paperId1] [paperId2] ...
	export [xmlFileName] [conference_path] [sched_conf_path] paper [paperId]

Additional parameters are required for importing data as follows, depending
on the root node of the XML document.

If the root node is <paper> or <papers>, additional parameters are required.
The following formats are accepted:

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_id [trackId]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_name [trackName]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_abbrev [trackAbbrev]',
  'plugins.importexport.native.export' => 'Export dat',
  'plugins.importexport.native.export.tracks' => 'Export Sekcí',
  'plugins.importexport.native.export.papers' => 'Export příspěvků',
  'plugins.importexport.native.selectPaper' => 'Zvolte příspěvek',
  'plugins.importexport.native.import.papers' => 'Import příspěvků',
  'plugins.importexport.native.import.papers.description' => 'Soubor dat který importujete obsahuje jeden nebo více příspěvků. Budete muset zvolit sekci, do které chcete příspěvek(y) importovat. Pokud si přejete importovat více příspěvků hromadně do jedné sekce, je možné rozdělit XML soubor do jednotlivých samostatně importovaných částí. Další možností je po importu celého souboru, ručně přesunout zvolené příspěvky do odpovídajících sekcí.',
  'plugins.importexport.native.import' => 'Import dat',
  'plugins.importexport.native.import.description' => 'Doplněk umožňuje import dat ve formátu definovaném v souboru native.dtd (Document Type Definition). Podporované kořenové položky jsou &lt;paper&gt; a &lt;papers&gt;.',
  'plugins.importexport.native.import.error' => 'Chyba při importu',
  'plugins.importexport.native.import.error.description' => 'Při importu dat došlo k chybě. Prosím, ověřte, že formát importovaného souboru odpovídá specifikaci. Konkrétní údaje o chybách jsou uvedeny níže.',
  'plugins.importexport.native.cliError' => 'ERROR:',
  'plugins.importexport.native.error.uploadFailed' => 'Nahrávání souboru selhalo. Prosím, ověřte, že je povoleno nahrávání souborů na server a soubor který se pokoušíte nahrát, nemá velikost větší než jakou povoluje konfigurace PHP a webového serveru.',
  'plugins.importexport.native.error.unknownUser' => 'Definovaný uživatel: "{$userName}" neexistuje.',
  'plugins.importexport.native.error.unknownConference' => 'Definovaná konference: "{$conferencePath}" nebo cesta k naplánované konferenci: "{$schedConfPath}" neexistuje.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Nelze zapisovat do souboru: "{$fileName}".',
  'plugins.importexport.native.export.error.trackNotFound' => 'Žádná sekce neodpovídá specikátoru: "{$trackIdentifier}".',
  'plugins.importexport.native.export.error.paperNotFound' => 'Žádný příspěvek neodpovídá uvedenému ID příspěvku: "{$paperId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Tento doplněk nepodporuje uvedený kořenový uzel (root node): "{$rootName}". Prosím, zkontrolujte, že se jedná o správný soubor a případně akci zopakujte.',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'Byla zadána nesprávná boolovská hodnota: "{$value}". Prosím použijte "true" nebo "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'Bylo zadáno neplatné datum: "{$value}".',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Data byla uložena pomocí neznámého typu kódování: "{$type}".',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Nelze uložit lokální kopii souboru: "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'Byla zadána neplatná URL adresa: "{$url}". Import pomocí vzdálených souborů podporuje pouze tyto metody přístupu: http, https, ftp, nebo ftps.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'Byl uveden neznámý typ doplňkových souborů: "{$suppFileType}".',
  'plugins.importexport.native.import.error.couldNotCopy' => 'Z uvedené URL adresy "{$url}" není možné zkopírovat soubor do lokální kopie.',
  'plugins.importexport.native.import.error.paperTitleLocaleUnsupported' => 'Název příspěvku:("{$paperTitle}") byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperAbstractLocaleUnsupported' => 'Abstrakt k příspěvku s názvem: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'Pro příspěvek: "{$paperTitle}" v sekci: "{$trackTitle}" chybí jméno(štítek) šablony.',
  'plugins.importexport.native.import.error.suppFileMissing' => 'Pro příspěvek: "{$paperTitle}" v sekci: "{$trackTitle}" chybí doplňkový soubor.',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'Pro příspěvek: "{$paperTitle}" v sekci: "{$trackTitle}" chybí soubor šablony.',
  'plugins.importexport.native.import.error.trackTitleLocaleUnsupported' => 'Název sekce: ("{$trackTitle}") byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.trackAbbrevLocaleUnsupported' => 'Zkratka sekce: ("{$trackAbbrev}") byla vytvořena v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.trackIdentifyTypeLocaleUnsupported' => 'Údaje o kategorii příspěvků v sekci: ("{$trackIdentifyType}") byly vytvořeny v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.trackPolicyLocaleUnsupported' => 'Pravidla sekce: ("{$trackPolicy}") byly vytvořeny v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.trackTitleMismatch' => 'Název sekce: "{$track1Title}" a název sekce: "{$track2Title}" odpovídají různým existující konferenčním sekcím.',
  'plugins.importexport.native.import.error.trackTitleMatch' => 'Název sekce: "{$trackTitle}" odpovídá existující konferenční sekci, ale další název pro tuto sekci neodpovídá dalšímu názvu existující sekce.',
  'plugins.importexport.native.import.error.trackAbbrevMismatch' => 'Zkratka sekce: "{$track1Abbrev}" a zkratka sekce: "{$track2Abbrev}" odpovídají různým existující konferenčním sekcím.',
  'plugins.importexport.native.import.error.trackAbbrevMatch' => 'Zkratka sekce: "{$trackAbbrev}" odpovídá zkratce existující konferenční sekce, ale další zkratka pro tuto sekci neodpovídá další zkratce existující sekce.',
  'plugins.importexport.native.import.error.paperDisciplineLocaleUnsupported' => 'Údaj o vědním oboru článku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperTypeLocaleUnsupported' => 'Údaj o typu příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSubjectLocaleUnsupported' => 'Údaj předmět příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSubjectClassLocaleUnsupported' => 'Údaj o klasifikaci předmětu příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperCoverageGeoLocaleUnsupported' => 'Geografické údaje příspěvku: "{$paperTitle}" byly vytvořeny v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperCoverageChronLocaleUnsupported' => 'Chronologické údaje příspěvku: "{$paperTitle}" byly vytvořeny v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperCoverageSampleLocaleUnsupported' => 'Údaje souboru dat poskytnuté do článku: "{$paperTitle}" byly vytvořeny v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSponsorLocaleUnsupported' => 'Údaje o sponzorovi příspěvku: "{$paperTitle}" byly vytvořeny v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperAuthorCompetingInterestsLocaleUnsupported' => 'Údaj o střetu zájmů autora: "{$authorFullName}" příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperAuthorBiographyLocaleUnsupported' => 'Biografie autora: "{$authorFullName}" příspěvku: "{$paperTitle}" byla vytvořena v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'Šablona pro příspěvek: "{$paperTitle}" byla vytvořena v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFileTitleLocaleUnsupported' => 'Název doplňkového souboru: ("{$suppFileTitle}") příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFileCreatorLocaleUnsupported' => 'Jméno autora doplňkového souboru: "{$suppFileTitle}" příspěvku: "{$paperTitle}" bylo vytvořeno v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFileSubjectLocaleUnsupported' => 'Údaj o předmětu doplňkového souboru: "{$suppFileTitle}" příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFileTypeOtherLocaleUnsupported' => 'Uživatelský typ doplňkového souboru: "{$suppFileTitle}" příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFileDescriptionLocaleUnsupported' => 'Popis doplňkového souboru: "{$suppFileTitle}" příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFilePublisherLocaleUnsupported' => 'Údaj o vydavateli doplňkového souboru: "{$suppFileTitle}" příspěvku: "{$paperTitle}" byl vytvořen v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFileSponsorLocaleUnsupported' => 'Údaje o sponzorovi dat v doplňkového souboru: "{$suppFileTitle}" příspěvku: "{$paperTitle}" byly vytvořeny v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.error.paperSuppFileSourceLocaleUnsupported' => 'Jméno studie/zdroje dat doplňkového souboru: "{$suppFileTitle}" příspěvku: "{$paperTitle}" bylo vytvořeno v jazyce: ("{$locale}"), který tato konference nepodporuje.',
  'plugins.importexport.native.import.success' => 'Úspěšný import',
  'plugins.importexport.native.import.success.description' => 'Import proběhl úspěšně. Úspěšně importované položky jsou uvedeny níže.',
); ?>