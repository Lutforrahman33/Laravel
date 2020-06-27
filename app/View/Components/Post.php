<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $title;
    public $writer;
    public $thumb;
    public $description;
    public $publishedAt;
    public $link;


    public function __construct($title , $writer , $thumb , $description , $publishedAt , $link)
    {
        $this->title = $title;
        $this->writer = $writer;
        $this->thumb = $thumb;
        $this->description = $description;
        $this->publishedAt = $publishedAt;
        $this->link = $link;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.post');
    }
}
