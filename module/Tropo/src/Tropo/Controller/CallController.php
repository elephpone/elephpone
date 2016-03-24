<?php
namespace Tropo\Controller;

use Tropo\Service\Tropo;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class CallController extends AbstractActionController
{
    public function indexAction()
    {
        $tropo = new Tropo();
        $quote = $tropo->getRandomRecording();
        $view = new JsonModel(
            array (
                'quote' => array (
                    'tropo' => array (
                        'say' => array (
                            'value' => $quote,
                        ),
                    ),
                ),
            )
        );
        $view->setTerminal(true);
        return $view;
    }
}