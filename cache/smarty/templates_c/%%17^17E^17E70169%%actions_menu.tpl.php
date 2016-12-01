<?php /* Smarty version 2.6.29, created on 2016-12-01 06:59:02
         compiled from themes/SuiteP/include/MySugar/tpls/actions_menu.tpl */ ?>
<ul class="dropdown-menu tab-actions">
    <?php if (! $this->_tpl_vars['lock_homepage']): ?>
        <li>
            <a class="button addDashlets"  data-toggle="modal" data-target=".modal-add-dashlet"><?php echo $this->_tpl_vars['lblAddDashlets']; ?>
</a>
        </li>
        <li>
            <a class="button addDashboard"  data-toggle="modal" data-target=".modal-add-dashboard">
                <span><?php echo $this->_tpl_vars['lblAddTab']; ?>
</span>
            </a>
        </li>
        <li>
            <a class="button addDashboard"  data-toggle="modal" data-target=".modal-edit-dashboard">
                <span><?php echo $this->_tpl_vars['app']['LBL_EDIT_TAB']; ?>
</span>
            </a>
        </li>
    <?php endif; ?>
</ul>