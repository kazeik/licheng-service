<?php
 namespace Api\Controller;

 use \Think\Controller\RestController;

abstract class BaseController extends RestController{
    protected $allowMethod=array('get','post','put');
    protected $defaultMethod= array('get');
}