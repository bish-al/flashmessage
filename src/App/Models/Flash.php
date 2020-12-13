<?php 

namespace Bishal\FlashMessage\App\Models;


class Flash 
{

	public static function display($flashMessage, $flashType)
	{
		session()->flash('flashMessage', $flashMessage);
		session()->flash('flashColourType', $flashType);
	}












}











?>