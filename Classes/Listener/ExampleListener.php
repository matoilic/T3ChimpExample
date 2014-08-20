<?php

namespace MatoIlic\T3ChimpExample\Listener;

use MatoIlic\T3Chimp\MailChimp\Form;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;

class ExampleListener {
    public function listenerMethod(Form $form, ViewInterface $view, ActionController $controller) {
        /* YOUR CODE HERE */
    }
}
