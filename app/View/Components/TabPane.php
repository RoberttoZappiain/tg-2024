<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TabPane extends Component
{
    public $id;
    public $title;
    public $content;
    public $mainImg;
    public $carouselImgs;
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $content, $mainImg, $carouselImgs, $icon)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->mainImg = $mainImg;
        $this->carouselImgs = collect($carouselImgs); // Convert to collection
        $this->icon = $icon;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.tab-pane');
    }
}
