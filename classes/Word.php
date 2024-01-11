<?php

class Word
{
    private string $word;
    private string $answer;

    public function __construct(string $word, string $answer)
    {
        $this->word = $word;
        $this->answer = $answer;
    }

    public function verify(string $answer): bool
    {
        if (strtolower($this->answer) === strtolower($answer)) return true;
        else return false;
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}