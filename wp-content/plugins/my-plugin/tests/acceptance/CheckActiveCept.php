<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('checking for title');
$I->amOnPage('/');
$I->see('CEPT – Just another WordPress site');
