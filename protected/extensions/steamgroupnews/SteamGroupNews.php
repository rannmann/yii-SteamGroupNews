<?php

class SteamGroupNews extends CWidget
{
    public $group; // Steam Group name
    public $title; // Widget title
    public $news; // Data from Steam
    public $err; // Error message
    public $limit; // Results to show

    public function run() {
        if (!isset($this->group)) {
            $this->err = "NO GROUP SET";
        }
        if (!isset($this->title))
            $this->title = 'Latest News';
        if (!isset($this->limit))
            $this->limit = 5;
        $this->getRss();
        $this->render('steamGroupNews');
    }

    private function getRss() {
        try {
            $xml = simplexml_load_string(file_get_contents('http://steamcommunity.com/groups/'.$this->group.'/rss/'));
            if (isset($xml->channel->item))
                $this->news = $xml->channel->item;
        } catch (Exception $e) {
            if (!isset($this->err))
                $this->err = $e->getMessage();
        }
    }
}