<?php /* Smarty version 2.6.26, created on 2016-10-24 14:11:05
         compiled from file:/home/emttpefczu/public_html/plugins/importexport/users/importUsersConfirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/emttpefczu/public_html/plugins/importexport/users/importUsersConfirm.tpl', 16, false),array('function', 'plugin_url', 'file:/home/emttpefczu/public_html/plugins/importexport/users/importUsersConfirm.tpl', 17, false),array('function', 'url', 'file:/home/emttpefczu/public_html/plugins/importexport/users/importUsersConfirm.tpl', 124, false),array('modifier', 'escape', 'file:/home/emttpefczu/public_html/plugins/importexport/users/importUsersConfirm.tpl', 19, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.users.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.confirmUsers"), $this);?>
:
<form action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'import'), $this);?>
" method="post">
<?php if ($this->_tpl_vars['sendNotify']): ?>
	<input type="hidden" name="sendNotify" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sendNotify'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['continueOnError']): ?>
	<input type="hidden" name="continueOnError" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['continueOnError'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>

<?php if ($this->_tpl_vars['errors']): ?>
	<p>
		<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.warning"), $this);?>
:</span>
		<ul class="formErrorList">
			<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['message']):
?>
				<li><?php echo $this->_tpl_vars['message']; ?>
</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</p>
<?php endif; ?>

<table width="100%" class="listing">
	<tr>
		<td colspan="7" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="5%">&nbsp;</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.firstName"), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.middleName"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.lastName"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.roles"), $this);?>
</td>
	</tr>	
	<tr>
		<td colspan="7" class="headseparator">&nbsp;</td>
	</tr>
<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['users'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['users']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['userKey'] => $this->_tpl_vars['user']):
        $this->_foreach['users']['iteration']++;
?>
	<tr valign="top">
		<td>
			<input type="checkbox" name="userKeys[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" checked="checked" />
			<?php $_from = $this->_tpl_vars['user']->getBiography(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['value']):
?>
				<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_biography[<?php echo ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['user']->getSignature(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['value']):
?>
				<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_signature[<?php echo ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['user']->getInterests(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['value']):
?>
				<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_interests[<?php echo ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['user']->getGossip(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['value']):
?>
				<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_gossip[<?php echo ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['user']->getLocales(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['locales'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['locales']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['locale']):
        $this->_foreach['locales']['iteration']++;
?>
				<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_locales[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['locale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<?php endforeach; endif; unset($_from); ?>			
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_country" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getCountry())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_mailingAddress" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getMailingAddress())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_fax" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFax())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getPhone())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_affiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_gender" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getGender())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_initials" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getInitials())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_salutation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getSalutation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getPassword())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_unencryptedPassword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUnencryptedPassword())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_mustChangePassword" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getMustChangePassword())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
		</td>
		<td><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getMiddleName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUsername())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="9" class="textField" /></td>
		<td>
			<select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['userKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
_roles[]" size="5" multiple="multiple" class="selectMenu">
				<?php $_from = $this->_tpl_vars['roleOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roleKey'] => $this->_tpl_vars['roleOption']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['roleKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php if (( $this->_tpl_vars['roleKey'] == '' && count ( $this->_tpl_vars['usersRoles'][$this->_tpl_vars['userKey']] ) == 0 )): ?>selected<?php elseif (( in_array ( $this->_tpl_vars['roleOption'] , $this->_tpl_vars['usersRoles'][$this->_tpl_vars['userKey']] ) )): ?>selected="selected"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['roleOption']), $this);?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="7" class="<?php if (($this->_foreach['users']['iteration'] == $this->_foreach['users']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="7" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.people.noneEnrolled"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="7" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; unset($_from); ?>
</table>

<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.importUsers"), $this);?>
" class="button defaultButton" />
</form>

<?php if ($this->_tpl_vars['isError']): ?>
<p id="errorsOccurred">
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.users.import.errorsOccurred"), $this);?>
:</span>
	<ul class="formErrorList">
	<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['message']):
?>
			<li><?php echo $this->_tpl_vars['message']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
</p>
<?php endif; ?>

<p>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'manager'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.conferenceSiteManagement"), $this);?>
</a></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>