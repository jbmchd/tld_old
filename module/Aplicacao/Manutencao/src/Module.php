<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Aplicacao\Manutencao;

class Module
{
    const VERSION = '3.0.2dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    public function getControllerConfig() {
        return [ 
            'factories' => [
                Controller\ManutencaoController::class => function( $sm ) {
                    return new Controller\ManutencaoController($sm);
                },
            ]
        ];
    }
}
