<?php
require_once '../../DAL/UserRepository.php';


function GetAllVacancies()
{
    return AllVacancies();
}

function GetUser($profile)
{
    InsertUser($profile);
}

function Getwhichuser($profile)
{
    return getwhichuserr($profile);
}

function GetMinistry($name)
{
    return Ministryy($name);
}

function  InsertVacancie($profile)
{
    return InsertVacancieee($profile);
}

function  UpdateVacancie($profile)
{
     return UpdateVacancieee($profile);
}

function DeleteVacancie($profile)
{
    return DeleteVacancieee($profile);
}

function GetProfile($id)
{    
    return GetProfileQuery($id);
}

function DeleteProfile($id)
{
    return DeleteProfileQuery($id);
  
}

function getmyprofile()
{
    return myyprofilee();
}

function GetMinistrynumberemp($name)
{
    return GetMinistrynumber($name);
}

function GetAllEmployees()
{
    return AllEmployees();
}

function InsertEmployee($profile)
{
    return InsertEmployeee($profile);
}

function GetProfile1($id)
{
    return GetProfileQuery1($id);
}

function  UpdateEmployee($profile)
{
     return UpdateEmployeee($profile);
}

function DeleteProfile1($id)
{
    return DeleteProfileQuery1($id);
  
}