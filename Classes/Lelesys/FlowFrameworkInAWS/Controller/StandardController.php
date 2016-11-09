<?php
namespace Lelesys\FlowFrameworkInAWS\Controller;

/*
 * This file is part of the Lelesys.FlowFrameworkInAWS package.
 */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Session\SessionManagerInterface;

class StandardController extends \TYPO3\Flow\Mvc\Controller\ActionController
{
	/**
	 * @Flow\Inject
	 * @var SessionManagerInterface
	 */
	protected $sessionManager;

    /**
     * @Flow\Session(autoStart=true)
     * @return void
     */
    public function indexAction()
    {
	$session = $this->sessionManager->getCurrentSession();
        $this->view->assign('sessionId',$session->getId());
	$this->view->assign('hostname',gethostname());
    }

}
