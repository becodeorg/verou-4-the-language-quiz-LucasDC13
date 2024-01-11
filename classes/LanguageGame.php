<?php

class LanguageGame
{
    private array $words;
    private Word $word; 
    private Player $player;

    public function __construct()
    {
        $this->words = [];
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $englishTranslation => $dutchTranslation) {
            $this->words[] = new Word($englishTranslation, $dutchTranslation);
        }
    }

    private function generateRandomWord(): void
    {
        $this->word = $this->words[rand(0, count($this->words)-1)];
        $_SESSION['currentWord'] = $this->word; 
    }


    public function run(): void
    {
        session_start();
        if(isset($_SESSION['player'])) $this->player = $_SESSION["player"];
        else {
            $this->player = new Player("Johnny");
            $_SESSION['player'] = $this->player;
        }

        echo $this->player->getName();
        echo "<br>";
        echo "<p>Score: <strong>" . $this->player->getScore() . "</strong></p>";

        if(empty($_POST)) {
            echo "geen post";
            $this->generateRandomWord();
            echo "<h1>Translate <i>this</i>!!!</h1>";
            echo "<h2>" . $this->word->getWord() . "</h2>";
        } else {
            echo "post";
            $answer = $_POST["translationBar"];
            if ($_SESSION['currentWord']->verify($answer)) {
                echo "<p>Good job mate!</p>";
                $this->player->raiseScore();
            } else { 
                echo "<p><strong>You dumb wanker!</strong></p>";
            }
            echo "<p> Right answer: " . $_SESSION['currentWord']->getTranslation() . "</p>";
            echo "<p> Your answer: " . $answer . "</p>";
        }
    }
}