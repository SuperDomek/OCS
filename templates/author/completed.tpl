{**
 * completed.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Show the details of completed submissions.
 *
 * $Id$
 *}
<div id="submissions">
<table class="listing" width="100%">
	<tr><td class="headseparator" colspan="7">&nbsp;</td></tr>
	<tr valign="bottom" class="heading">
		<td width="5%">{sort_heading key="common.id" sort="id"}</td>
		<td width="5%"><span class="disabled">MM-DD</span><br />{sort_heading key="submissions.submit" sort="submitDate"}</td>
		<td width="5%">{sort_heading key="submissions.track" sort="track"}</td>
		<td width="25%">{sort_heading key="paper.authors" sort="authors"}</td>
		<td width="35%">{sort_heading key="paper.title" sort="title"}</td>
    <td width="15%">{translate key="director.paper.decision"}</td>
		<td width="10%" align="right">{sort_heading key="common.status" sort="status"}</td>
	</tr>
	<tr><td class="headseparator" colspan="7">&nbsp;</td></tr>
{iterate from=submissions item=submission}
	{assign var="paperId" value=$submission->getPaperId()}
  {* EDIT Add Director decision column*}
  {assign var="stage" value=$submission->getCurrentStage()}
  {assign var="directorDecisions" value=$submission->getDecisions($stage)}
  {assign var="lastDecision" value=$directorDecisions|@end}
  {* EDIT *}
	<tr valign="top">
		<td>{$paperId|escape}</td>
		<td>{$submission->getDateSubmitted()|date_format:$dateFormatTrunc}</td>
		<td>{$submission->getTrackAbbrev()|escape}</td>
		<td>{$submission->getAuthorString(true)|truncate:40:"..."|escape}</td>
		<td><a href="{url op="submission" path=$paperId}" class="action">{$submission->getLocalizedTitle()|strip_tags|truncate:60:"..."}</a></td>
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
			{assign var="status" value=$submission->getSubmissionStatus()}
			{if $status == STATUS_ARCHIVED}{translate key="submissions.archived"}
			{elseif $status == STATUS_PUBLISHED}{translate key="submissions.published"}
			{elseif $status == STATUS_DECLINED}{translate key="submissions.declined"}
			{/if}
		</td>
	</tr>

	<tr>
		<td colspan="7" class="{if $submissions->eof()}end{/if}separator">&nbsp;</td>
	</tr>
{/iterate}
{if $submissions->wasEmpty()}
	<tr>
		<td colspan="7" class="nodata">{translate key="submissions.noSubmissions"}</td>
	</tr>
	<tr>
		<td colspan="7" class="endseparator">&nbsp;</td>
	</tr>
{else}
	<tr>
		<td colspan="5" align="left">{page_info iterator=$submissions}</td>
		<td colspan="2" align="right">{page_links anchor="submissions" name="submissions" iterator=$submissions sort=$sort sortDirection=$sortDirection}</td>
	</tr>
{/if}
</table>
</div>
