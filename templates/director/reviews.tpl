{**
 * submissions.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 *               2019 Dominik Bláha@CULS
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Director reviews page(s).
 *
 * $Id$
 *}
{strip}
{assign var="pageTitle" value="director.reviews"}
{url|assign:"currentUrl" page="director"}{include file="common/header.tpl"}
{/strip}

<script type="text/javascript">
{literal}
<!--
function sortSearch(heading, direction) {
  document.submit.sort.value = heading;
  document.submit.sortDirection.value = direction;
  document.submit.submit() ;
}
// -->
{/literal}
</script> 

<form action="#">
<ul class="filter">
	<li>{translate key="director.submissions.assignedTo"}: <select name="filterDirector" onchange="location.href='{url|escape:"javascript" searchField=$searchField searchMatch=$searchMatch search=$search dateFromDay=$dateFromDay dateFromYear=$dateFromYear dateFromMonth=$dateFromMonth dateToDay=$dateToDay dateToYear=$dateToYear dateToMonth=$dateToMonth filterDirector="DIRECTOR"}'.replace('DIRECTOR', this.options[this.selectedIndex].value)" size="1" class="selectMenu">{html_options options=$directorOptions selected=$filterDirector}</select></li>
	<li>{translate key="director.submissions.inTrack"}: <select name="filterTrack" onchange="location.href='{url|escape:"javascript" searchField=$searchField searchMatch=$searchMatch search=$search dateFromDay=$dateFromDay dateFromYear=$dateFromYear dateFromMonth=$dateFromMonth dateToDay=$dateToDay dateToYear=$dateToYear dateToMonth=$dateToMonth filterTrack="TRACK_ID"}'.replace('TRACK_ID', this.options[this.selectedIndex].value)" size="1" class="selectMenu">{html_options options=$trackOptions selected=$filterTrack}</select></li>
</ul>
</form>

<div style="float:left;">
<form method="post" name="submit" action="{url op="reviews"}">
	<input type="hidden" name="sort" value="id"/>
	<input type="hidden" name="sortDirection" value="ASC"/>
	<select name="searchField" size="1" class="selectMenu">
		{html_options_translate options=$fieldOptions selected=$searchField}
	</select>
	<select name="searchMatch" size="1" class="selectMenu">
		<option value="contains"{if $searchMatch == 'contains'} selected="selected"{/if}>{translate key="form.contains"}</option>
		<option value="is"{if $searchMatch == 'is'} selected="selected"{/if}>{translate key="form.is"}</option>
		<option value="startsWith"{if $searchMatch == 'startsWith'} selected="selected"{/if}>{translate key="form.startsWith"}</option>
	</select>
	<input type="text" size="15" name="search" class="textField" value="{$search|escape}" />
	<br/>
	<input type="submit" value="{translate key="common.search"}" class="button" />
</form>

</div>
<div style="position:relative;float:right;">
<a href="{url op="reviews" path=$pageToDisplay|to_array:"DOCX"}"><img src="{$baseUrl}/lib/pkp/templates/images/structure/word.png" alt="Export to MS Word" width="64px"/></a>
<a href="javascript:window.print()"><img src="{$baseUrl}/lib/pkp/templates/images/structure/pdf.png" alt="Download PDF" width="64px"/></a>
</div>
&nbsp;


<!-- tady potřebuju vložit něco jako submissionsInReview, ale s jinými daty -->
<div id="submissions">
<table width="100%" class="listing">
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%">{sort_search key="common.id" sort="id"}</td>
		<td width="45%">{sort_search key="paper.title" sort="title"}</td>
        <td width="50%">
			<table width="100%" class="nested">
				<tr valign="top">
					<td width="60%">{translate key="user.role.reviewers"}</td>
					<td width="20%">{translate key="common.status"}</td>
					<td width="20%">{translate key="submission.comments.review"}</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	
	{iterate from=submissions item=submission}
	<tr valign="top">
		<td>{$submission->getPaperId()}</td>
		<td><a href="{url op="submissionReview" path=$submission->getPaperId()|to_array:$submission->getCurrentStage()}" class="action">{$submission->getLocalizedTitle()|strip_tags|truncate:60:"..."|default:"&mdash;"}</a></td>
		<td>
		<table width="100%">
			{foreach from=$submission->getReviewAssignments() item=reviewAssignments}
				{foreach from=$reviewAssignments item=assignment name=assignmentList}
					{if not $assignment->getCancelled() and not $assignment->getDeclined()}
                    {assign var="reviewId" value=$assignment->getId()}
					<tr valign="top">
						<td width="60%">{$assignment->getReviewerFullName()|strip_tags|truncate:40:"..."|default:"&mdash;"}</td>
                        <td width="20%">
							{assign var="reviewStatusIndex" value=$assignment->getReviewStatus()}
							{translate key=$reviewStatusOptions[$reviewStatusIndex]}
						</td>
                        <td width="20%">
                            {if $assignment->getDateCompleted()}
                                <a href="javascript:openComments('{url op="viewReviewFormResponse" path=$submission->getPaperId()|to_array:$assignment->getId()}');" class="icon">{icon name="letter"}</a>
                            {else}
                                &mdash;
                            {/if}
                        </td>                        
					</tr>
					{/if}
				{foreachelse}
					<tr valign="top">
						<td width="60%">&mdash;</td>
						<td width="20%">&mdash;</td>
						<td width="20% >&mdash;</td>
					</tr>
				{/foreach}
			{foreachelse}
				<tr valign="top">
					<td width="60%">&mdash;</td>
					<td width="20%">&mdash;</td>
					<td width="20% >&mdash;</td>
					<td width="20% >&mdash;</td>
				</tr>
			{/foreach}
		</table>
		</td>
	</tr>
	<tr>
		<td colspan="3" class="{if $submissions->eof()}end{/if}separator">&nbsp;</td>
	</tr>
{/iterate}
{if $submissions->wasEmpty()}
	<tr>
		<td colspan="3" class="nodata">{translate key="submissions.noSubmissions"}</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
{else}
	<tr>
		<td colspan="2" align="left">{page_info iterator=$submissions}</td>
		<td align="right">{page_links anchor="submissions" name="submissions" iterator=$submissions searchField=$searchField searchMatch=$searchMatch search=$search track=$track sort=$sort sortDirection=$sortDirection}</td>
	</tr>
{/if}
</table>
</div>



{include file="common/footer.tpl"}
