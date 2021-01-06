<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Checking the title');
$I->amOnPage('/');
$I->see('CEPT – Just another WordPress site');