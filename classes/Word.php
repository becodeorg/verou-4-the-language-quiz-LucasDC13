<?php

class Word
{
    private string $word;
    private string $translation;

    public function __construct(string $word, string $translation)
    {
        $this->word = $word;
        $this->translation = $translation;
    }

    public function verify(string $answer): bool
    {
        if (strtolower($this->translation) === strtolower($answer)) return true;
        else return false;
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }

    public function getWord() 
    {
        return $this->word;
    }
    public function getTranslation() 
    {
        return $this->translation;
    }
}