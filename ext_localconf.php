<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');

//add an anonymous function as listener
$dispatcher->connect(
    'MatoIlic\\T3Chimp\\Controller\\SubscriptionsController',
    'beforeRenderView',
    function(\MatoIlic\T3Chimp\MailChimp\Form $form, \TYPO3\CMS\Extbase\Mvc\View\ViewInterface $view, TYPO3\CMS\Extbase\Mvc\Controller\ActionController $controller) {
        /* YOUR CODE HERE */
    },
    NULL,
    FALSE
);

//add a class as listener
$dispatcher->connect(
    'MatoIlic\\T3Chimp\\Controller\\SubscriptionsController',
    'onValidateForm',
    'MatoIlic\\T3ChimpExample\\Listener\\ExampleListener',
    'listenerMethod',
    FALSE
);
