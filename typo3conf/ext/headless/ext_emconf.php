<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "headless".
 *
 * Auto generated 31-07-2024 07:55
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'TYPO3 Headless API',
  'description' => 'Makes TYPO3 a headless CMS. Content and pages available in JSON format. Supports multilanguage, multidomain, forms, frontend login, workspaces and more. For JS frontend app see nuxt-typo3 package',
  'category' => 'fe',
  'version' => '4.3.2',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Łukasz Uznański',
  'author_email' => 'extensions@macopedia.pl',
  'author_company' => 'Macopedia Sp. z o.o.',
  'constraints' => 
  array (
    'depends' => 
    array (
      'frontend' => '12.4.3-12.5.99',
      'typo3' => '12.4.3-12.5.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

