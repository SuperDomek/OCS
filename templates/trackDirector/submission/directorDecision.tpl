{**
 * directorDecision.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Subtemplate defining the director decision table.
 *
 * $Id$
 *}
<div id="directorDecision">
<h3>{translate key="submission.directorDecision"}</h3>

<table width="100%" class="data">
<tr valign="top">
	<td class="label" width="20%">{translate key="director.paper.selectDecision"}</td>
	<td width="80%" class="value" colspan="2">
		<form method="post" action="{url op="recordDecision" path=$stage}">
			<input type="hidden" name="paperId" value="{$submission->getPaperId()}" />
			<select name="decision" size="1" class="selectMenu"{if not $allowRecommendation} disabled="disabled"{/if}>
				{assign var=availableDirectorDecisionOptions value=$submission->getDirectorDecisionOptions($currentSchedConf,$stage)}
				{html_options_translate options=$availableDirectorDecisionOptions selected=$lastDecision}
			</select>
			<input type="submit" onclick="return confirm('{translate|escape:"jsparam" key="director.submissionReview.confirmDecision"}')" name="submit" value="{translate key="director.paper.recordDecision"}" {if not $allowRecommendation}disabled="disabled"{/if} class="button" />
			{if not $allowRecommendation and $isCurrent}<br />{translate key="director.paper.cannotRecord}{/if}
		</form>
	</td>
</tr>
<tr valign="top">
	<td class="label">{translate key="director.paper.decision"}</td>
	<td class="value" colspan="2">
		{foreach from=$directorDecisions item=directorDecision key=decisionKey}
			{if $decisionKey neq 0} | {/if}
			{assign var="decision" value=$directorDecision.decision}
			<strong>{translate key=$directorDecisionOptions.$decision}</strong>&nbsp;&nbsp;{$directorDecision.dateDecided|date_format:$dateFormatShort}
		{foreachelse}
			<strong>{translate key="common.none"}</strong>
		{/foreach}
	</td>
</tr>
<tr valign="top">
  <td class="label">{translate key="submission.directorComment"}</td>
  <td class="value" colspan="2">
    {if $submission->getMostRecentDirectorDecisionComment()}
			{assign var="comment" value=$submission->getMostRecentDirectorDecisionComment()}
			<a href="javascript:openComments('{url op="viewDirectorDecisionComments" path=$submission->getPaperId() anchor=$comment->getId()}');">{translate key="submission.directorComment.enter"}</a>&nbsp;&nbsp;{icon name="accept"}
		{else}
			<a href="javascript:openComments('{url op="viewDirectorDecisionComments" path=$submission->getPaperId()}');">{translate key="submission.directorComment.enter"}</a>&nbsp;&nbsp;{icon name="action_stop"}
		{/if}
		{if $lastDecision == SUBMISSION_DIRECTOR_DECISION_DECLINE}
			<br />
			{if $submission->getStatus() == STATUS_ARCHIVED}{translate key="submissions.archived"}{else}<a href="{url op="archiveSubmission" path=$submission->getPaperId()}" onclick="return window.confirm('{translate|escape:"jsparam" key="director.submissionReview.confirmToArchive"}')" class="action">{translate key="director.paper.sendToArchive"}</a>{/if}
			{if $submission->getDateToArchive()}{$submission->getDateToArchive()|date_format:$dateFormatShort}{/if}
		{/if}
  </td>
</tr>
<tr valign="top">
	<td class="label">{translate key="submission.notifyAuthor"}</td>
	<td class="value" colspan="2">
    <a href="{url op="emailDirectorDecisionComment" paperId=$submission->getPaperId()}">{translate key="submission.directorAuthorRecord"}</a>
		&nbsp;&nbsp;&nbsp;&nbsp;


	</td>
</tr>
</table>
</div>
<form method="post" action="{url op="directorReview" path=$stage}" enctype="multipart/form-data">
<input type="hidden" name="paperId" value="{$submission->getPaperId()}" />
{assign var=authorFiles value=$submission->getAuthorFileRevisions($stage)}
{assign var=directorFiles value=$submission->getDirectorFileRevisions($stage)}
{assign var=reviewFile value=$submission->getReviewFile()}
{assign var="authorRevisionExists" value=false}
{assign var="directorRevisionExists" value=false}
{assign var="sendableVersionExists" value=false}

{if not $reviewingAbstractOnly}
	<table class="data" width="100%">
		{if $reviewFile}
			<tr valign="top">
				<td width="20%" class="label">{translate key="submission.reviewVersion"}</td>
				<td colspan="2" class="value">
					{if $lastDecision == SUBMISSION_DIRECTOR_DECISION_ACCEPT}
						<input type="radio" name="directorDecisionFile" value="{$reviewFile->getFileId()},{$reviewFile->getRevision()}" />
						{assign var="sendableVersionExists" value=true}
					{/if}
					<a href="{url op="downloadFile" path=$submission->getPaperId()|to_array:$reviewFile->getFileId():$reviewFile->getRevision()}" class="file">{$reviewFile->getFileName()|escape}</a>&nbsp;&nbsp;
					{$reviewFile->getDateModified()|date_format:$dateFormatShort}
				</td>
			</tr>
		{/if}
	</table>

{/if}
</form>

{if $isFinalReview}

	<div class="separator"></div>

	{include file="trackDirector/submission/complete.tpl"}

{/if}
