<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check if plugin is active');
$I->loginAsAdmin();
$I->amOnPluginsPage();
$I->seePluginDeactivated('my-plugin');
