<?php


namespace Tests;


use App\Http\Controllers\RoleConstant;

trait DefaultConstants
{
    public $defaultAdminId = 1;
    public $defaultAdminUserName = "admin@gmail.com";
    public $defaultAdminName = "Admin";
    public $defaultAdminPhone = "098676352";
    public $defaultAdminPassword = "admin";
    public $defaultAdminRole = RoleConstant::ADMIN;

}
