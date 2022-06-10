<?php
namespace Nwehrhan\TestPhpstan\ClassFolder;

use Nwehrhan\TestPhpstan\TraitFolder\SomeTrait;

class SomeClass
{
    use SomeTrait;

    public function classFunction()
    {
        echo 'Echo from class';
        $this->traitFunction();
    }
}
