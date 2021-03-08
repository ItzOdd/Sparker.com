<?php

function getUsernameRegex(): string
{
    return "/^[A-Za-z][A-Za-z0-9]{5,31}$/";
}

function getNamesRegex(): string
{
    return "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
}

function getPasswordRegex(): string
{
    return "/^(?=.+[a-z])(?=.+[A-Z])(?=.+\d)(?=.+[^a-zA-Z\d])$/";
}

function getSsnRegex(): string
{
    return "/^[\d]{9}$/";
}

function getPhoneNumberRegex(): string
{
    return "/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/";
}

function getAddressRegex(): string
{
    return "/^(?=.+[a-z])(?=.+[A-Z])(?=.*\d)(?=.*[,.\- ])$/";
}