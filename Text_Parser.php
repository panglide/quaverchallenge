<?php

class Text_Parser {


    public function __construct($filename) {
        $this->filename = $filename;
        
    }

    public function parse() 
    {
        
        $preamble = file_get_contents($this->filename);

        $text = strtolower($preamble);

        $words = explode(' ', $text);

       $clean_words = preg_replace("#[[:punct:]]#", "", $words);

        
        $t_words = [];
        $e_words = [];
        $t_e_words = [];

        foreach ($clean_words as $word)
        {
            if (substr($word, 0,1) === 't')
            {
                $t_words[] = $word;
            }
            if (substr($word, -1) === 'e')
            {
                $e_words[] = $word;
            }
            if ((substr($word, 0,1) === 't') && (substr($word, -1) === 'e'))
            {
                $t_e_words[] = $word;
            }
        }
        $arrays = [$t_words, $e_words, $t_e_words, $preamble];
        return $arrays;
    }


    public function tWords() {
        $arrays = $this->parse()[0];
        
        return count($arrays) . " words begin with T.";  
    }

    public function eWords() {
        $arrays = $this->parse()[1];
        
        return count($arrays) . " words end with E.";     
    }

    public function tEWords() {
        $arrays = $this->parse()[2];
        
        return count($arrays) . " words begin with T end with E.";     
    }

}

$parsed = new Text_Parser('public/preamble.txt');

