<?php

namespace Bishal\FlashMessage\App\View\Components;

use Illuminate\View\Component;

class flash extends Component
{
    public $flashColour;
    public $flashMessage;

    const flashColoursCombination = [
        'success' => 'bg-green-400',
        'danger' => 'bg-red-400',
        'warning' => 'bg-orange-400',
        'info' => 'bg-blue-400',
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($flashColourType = null, $flashMessage = null)
    {

        if (session()->has('flashMessage') && session()->has('flashColourType')) 
        {
            $this->flashColourType = session()->get('flashColourType');
            $this->flashMessage = session()->get('flashMessage');
            $this->flashColour = self::flashColoursCombination[$this->flashColourType];   
        }
        

        if ($flashColourType != null && $flashMessage != null) {
            $this->flashColourType = $flashColourType;
            $this->flashColour = self::flashColoursCombination[$this->flashColourType];

            $this->flashMessage = $flashMessage;
        }
    }

    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('FlashBladeViewPath::components.flash');
    }
}
