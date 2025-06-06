<?php

class StringUtility
{
    public function shout($string)
    {
        return strtoupper($string) . '!';
    }

    public function whisper($string)
    {
        return strtolower($string) . '.';
    }
    
    public function repeat($string, $times)
    {
        return str_repeat($string, $times);
    }
}

$utility = new StringUtility();
echo $utility->shout('I love food') . '<br>';
echo $utility->whisper('I love food') . '<br>';
echo $utility->repeat('I love food', 5);