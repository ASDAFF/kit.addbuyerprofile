<?
/**
 * Copyright (c) 19/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => GetMessage("COLLECTED_ADDBUYERPROFILE_DOBAVLENIE_PROFILAMI"),
    "DESCRIPTION" => "",
    "ICON" => "/images/icon.gif",
    "SORT" => 10,
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => GetMessage("COLLECTED_ADDBUYERPROFILE_INTELLEKT_SERVIS"), // for example "my_project"
        /*"CHILD" => array(
            "ID" => "", // for example "my_project:services"
            "NAME" => "",  // for example "Services"
        ),*/
    ),
    "COMPLEX" => "N",
);
