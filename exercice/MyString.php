<?php

class MyString
{
    private string $myString = "default";

    public function showMyString(): string
    {
        return $this->myString;
    }
    public function editMyString(string $mystring): void
    {
        $this->myString = $mystring;
    }
}

$myString = new MyString();
$myString2 = new MyString();

$myString->editMyString("myString 1: Modification");
echo $myString->showMyString();
echo "\n";
$myString2->editMyString("myString 2: Modification");
echo $myString2->showMyString();
