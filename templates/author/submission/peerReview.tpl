{**
 * peerReview.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Subtemplate defining the author's peer review table.
 *
 * $Id$
 *}

<div id="peerReview">
<h3>{translate key="submission.peerReview"}</h3>

{assign var=start value="A"|ord}
{assign var=authorFiles value=$submission->getAuthorFileRevisions($stage)}
{assign var="directorFiles" value=$submission->getDirectorFileRevisions($stage)}
{assign var="viewableFiles" value=$authorViewableFilesByStage[$stage]}

<table class="data" width="100%">
	{if $stage == REVIEW_STAGE_PRESENTATION}
		<tr valign="top">
			<td class="label" width="20%">
				{translate key="submission.reviewVersion"}
			</td>
			<td class="value" width="80%">
				{assign var="reviewFile" value=$reviewFilesByStage[$stage]}
				{if $reviewFile}
					<a href="{url op="downloadFile" path=$submission->getPaperId()|to_array:$reviewFile->getFileId():$reviewFile->getRevision()}" class="file">{$reviewFile->getFileName()|escape}</a>&nbsp;&nbsp;{$reviewFile->getDateModified()|date_format:$dateFormatShort}
				{else}
					{translate key="common.none"}
				{/if}
			</td>
		</tr>
	{/if}
	<tr valign="top">
		<td class="label" width="20%">
			{translate key="submission.initiated"}
		</td>
		<td class="value">
			{if $reviewEarliestNotificationByStage[$stage]}
				{$reviewEarliestNotificationByStage[$stage]|date_format:$dateFormatShort}
			{else}
				&mdash;
			{/if}
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			{translate key="submission.lastModified"}
		</td>
		<td class="value">
			{if $reviewModifiedByStage[$stage]}
				{$reviewModifiedByStage[$stage]|date_format:$dateFormatShort}
			{else}
				&mdash;
			{/if}
		</td>
	</tr>
	
	<!-- EDIT Show reviewers decisions and review forms. -->
	{assign var="start" value="A"|ord}
	
	{foreach from=$reviewAssignments item=reviewAssignment key=reviewKey}
	{assign var="reviewId" value=$reviewAssignment->getId()}
	
	{if not $reviewAssignment->getCancelled()} {* Cancelled reviews are still in the system *}
		{assign var="reviewIndex" value=$reviewIndexes[$reviewId]}
		{if $reviewAssignment->getDateConfirmed() && !$reviewAssignment->getDeclined()}
		<tr>
		
			<td class="label" width="20%"><h4>{translate key="user.role.reviewer"} {$reviewIndex+$start|chr}</h4></td>
			<td class="value">
				{if $reviewAssignment->getRecommendation() !== null && $reviewAssignment->getRecommendation() !== ''}
						{assign var="recommendation" value=$reviewAssignment->getRecommendation()}
						{translate key=$reviewerRecommendationOptions.$recommendation}
						&nbsp;&nbsp;{$reviewAssignment->getDateCompleted()|date_format:$dateFormatShort}
					{else}
						{translate key="common.none"}&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="{url op="remindReviewer" paperId=$submission->getPaperId() reviewId=$reviewAssignment->getId()}" class="action">{translate key="reviewer.paper.sendReminder"}</a>
						{if $reviewAssignment->getDateReminded()}
							&nbsp;&nbsp;{$reviewAssignment->getDateReminded()|date_format:$dateFormatShort}
							{if $reviewAssignment->getReminderWasAutomatic()}
								&nbsp;&nbsp;{translate key="reviewer.paper.automatic"}
							{/if}
						{/if}
					{/if}
				<strong>Hodnocení</strong>&nbsp;Odkaz na recenzi.
			</td>
		</tr>
		{/if}
	{/if}
	{/foreach}
	<!-- END EDIT -->
	
	<!-- EDIT Hide different file versions.
	<tr valign="top">
		<td class="label" width="20%">
			{translate key="common.uploadedFile"}
		</td>
		<td class="value" width="80%">
			{foreach from=$viewableFiles item=reviewerFiles key=reviewer}
				{foreach from=$reviewerFiles item=viewableFile key=key}
					{assign var=thisReviewer value=$start+$reviewer|chr}
					{translate key="user.role.reviewer"} {$thisReviewer|escape}
					<a href="{url op="downloadFile" path=$submission->getPaperId()|to_array:$viewableFile->getFileId():$viewableFile->getRevision()}" class="file">{$viewableFile->getFileName()|escape}</a>&nbsp;&nbsp;{$viewableFile->getDateModified()|date_format:$dateFormatShort}<br />
				{/foreach}
			{foreachelse}
				{translate key="common.none"}
			{/foreach}
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%">
			{translate key="submission.directorVersion"}
		</td>
		<td class="value" width="80%">
			{foreach from=$directorFiles item=directorFile key=key}
				<a href="{url op="downloadFile" path=$submission->getPaperId()|to_array:$directorFile->getFileId():$directorFile->getRevision()}" class="file">{$directorFile->getFileName()|escape}</a>&nbsp;&nbsp;{$directorFile->getDateModified()|date_format:$dateFormatShort}<br />
			{foreachelse}
				{translate key="common.none"}
			{/foreach}
		</td>
	</tr>
	{if $stage == REVIEW_STAGE_PRESENTATION}
		<tr valign="top">
			<td class="label" width="20%">
				{translate key="submission.authorVersion"}
			</td>
			<td class="value" width="80%">
				{foreach from=$authorFiles item=authorFile key=key}
					<a href="{url op="downloadFile" path=$submission->getPaperId()|to_array:$authorFile->getFileId():$authorFile->getRevision()}" class="file">{$authorFile->getFileName()|escape}</a>&nbsp;&nbsp;{$authorFile->getDateModified()|date_format:$dateFormatShort}<br />
				{foreachelse}
					{translate key="common.none"}
				{/foreach}
			</td>
		</tr>
	{/if}
	-->
</table>
</div>
