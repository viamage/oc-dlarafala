<?php namespace Viamage\DlaRafala\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Server Requests Back-end Controller
 */
class ServerRequests extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Viamage.DlaRafala', 'dlarafala', 'serverrequests');
    }
}
