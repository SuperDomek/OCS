{**
 * submissionsArchives.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Show listing of submission archives.
 *
 * $Id$
 *}
<div id="submissions">
<table width="100%" class="listing">
	<tr>
		<td colspan="8" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%">{sort_search key="common.id" sort="id"}</td>
		<td width="10%"><span class="disabled"></span><br />{sort_search key="submissions.submitted" sort="submitDate"}</td>
		<td width="5%">{sort_search key="submissions.track" sort="track"}</td>
		<td width="5%">{sort_search key="paper.sessionType" sort="sessionType"}</td>
		<td width="25%">{sort_search key="paper.authors" sort="authors"}</td>
		<td width="25%">{sort_search key="paper.title" sort="title"}</td>
    <td width="15%">{translate key="director.paper.decision"}</td>
		<td width="10%" align="right">{sort_search key="common.status" sort="status"}</td>
	</tr>
	<tr>
		<td colspan="8" class="headseparator">&nbsp;</td>
	</tr>

	{iterate from=submissions item=submission}
	{assign var="paperId" value=$submission->getPaperId()}
  {* EDIT Add Director decision column*}
  {assign var="stage" value=$submission->getCurrentStage()}
  {assign var="directorDecisions" value=$submission->getDecisions($stage)}
  {assign var="lastDecision" value=$directorDecisions|@end}
  {* EDIT *}
	<tr valign="top">
		<td>{$paperId|escape}</td>
		<td>{$submission->getDateSubmitted()|date_format:$dateFormatShort}</td>
		<td>{$submission->getTrackAbbrev()|escape}</td>
		<td>
			{assign var="sessionTypeId" value=$submission->getData('sessionType')}
			{if $sessionTypeId}
				{assign var="sessionType" value=$sessionTypes.$sessionTypeId}
				{$sessionType->getLocalizedName()|escape}
			{/if}
		</td>
		<td>{$submission->getAuthorString(true)|truncate:40:"..."|escape}</td>
		<td><a href="{url op="submissionReview" path=$paperId}" class="action">{$submission->getLocalizedTitle()|strip_tags|truncate:60:"..."|default:"&mdash;"}</a></td>
    {* EDIT Add Director decision column*}
    <td>
      {if $lastDecision.decision == SUBMISSION_DIRECTOR_DECISION_ACCEPT}
        {translate key="director.paper.decision.accept"}
      {elseif $lastDecision.decision == SUBMISSION_DIRECTOR_DECISION_AWARD}
        {translate key="director.paper.decision.award"}
      {elseif $lastDecision.decision == SUBMISSION_DIRECTOR_DECISION_DECLINE}
        {translate key="director.paper.decision.decline"}
      {elseif $lastDecision.decision == SUBMISSION_DIRECTOR_DECISION_PUNISH}
        {translate key="director.paper.decision.punish"}
      {/if}
    </td>
    {* EDIT *}
		<td align="right">
			{assign var="status" value=$submission->getStatus()}
			{if $status == STATUS_ARCHIVED}
				{translate key="submissions.archived"}&nbsp;&nbsp;<a href="{url op="deleteSubmission" path=$paperId}" onclick="return confirm('{translate|escape:"jsparam" key="director.submissionArchive.confirmDelete"}')" class="action">{translate key="common.delete"}</a>
			{elseif $status == STATUS_PUBLISHED}
				{translate key="submissions.published"}
			{elseif $status == STATUS_DECLINED}
				{translate key="submissions.declined"}&nbsp;&nbsp;<a href="{url op="deleteSubmission" path=$paperId}" onclick="return confirm('{translate|escape:"jsparam" key="director.submissionArchive.confirmDelete"}')" class="action">{translate key="common.delete"}</a>
			{/if}
		</td>
	</tr>
	<tr>
		<td colspan="8" class="{if $submissions->eof()}end{/if}separator">&nbsp;</td>
	</tr>
{/iterate}
{if $submissions->wasEmpty()}
	<tr>
		<td colspan="8" class="nodata">{translate key="submissions.noSubmissions"}</td>
	</tr>
	<tr>
		<td colspan="8" class="endseparator">&nbsp;</td>
	</tr>
{else}
	<tr>
		<td colspan="6" align="left">{page_info iterator=$submissions}</td>
		<td colspan="2" align="right">{page_links anchor="submissions" name="submissions" iterator=$submissions searchField=$searchField searchMatch=$searchMatch search=$search track=$track sort=$sort sortDirection=$sortDirection}</td>
	</tr>
{/if}
</table>
</div>
