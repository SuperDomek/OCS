{**
 * peerReview.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Subtemplate defining the author's director decision table.
 *
 * $Id$
 *}
<div id="directorDecision">
<h3>{translate key="submission.directorDecision"}</h3>

{assign var=authorFiles value=$submission->getAuthorFileRevisions($submission->getCurrentStage())}
{assign var=directorFiles value=$submission->getDirectorFileRevisions($submission->getCurrentStage())}

<table width="100%" class="data">
	<tr valign="top">
		<td class="label">{translate key="director.paper.decision"}</td>
		<td>
			{if $lastDirectorDecision}
				{assign var="decision" value=$lastDirectorDecision.decision}
				<strong>{translate key=$directorDecisionOptions.$decision}</strong> {$lastDirectorDecision.dateDecided|date_format:$dateFormatShort}
			{else}
				&mdash;
			{/if}
		</td>
	</tr>
  <!-- EDIT Author can't reach to director, only see decision and comment -->
	<tr valign="middle">
		<td class="label" width="20%">
			{translate key="submission.directorComment"}
		</td>
		<td class="value" width="80%">
				{if $submission->getMostRecentDirectorDecisionComment()}
				{assign var="comment" value=$submission->getMostRecentDirectorDecisionComment()}
        <textarea class="textArea" rows="10" cols="40" readonly>{$comment->getComments()}</textarea>
			{else}
				{translate key="common.noComments"}
			{/if}
		</td>
	</tr>

</table>
</div>
