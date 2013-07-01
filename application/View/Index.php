<?php

namespace View;

class Index {

	public $title;
	public $content;

	public function __construct() {

		$this->title = 'It\'s Works !';
		$this->content = '
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet ligula sed est porttitor pretium ut in odio. Duis nunc mi, congue at mattis non, rhoncus at leo. Donec pretium quam id enim viverra, non cursus dui pharetra. Aliquam vehicula adipiscing neque vitae tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla elementum orci ut enim venenatis dignissim at a leo. Duis ipsum libero, bibendum egestas enim molestie, ultrices gravida dolor. Fusce nec sem rutrum, placerat diam commodo, placerat ipsum. Fusce ornare velit sit amet dolor consequat mollis. Integer faucibus est vel sagittis lacinia. Pellentesque sed vehicula elit. Pellentesque molestie ante non venenatis accumsan.</p>

<p>Fusce fermentum felis eu nibh placerat, vel condimentum neque tempus. In blandit, velit vel adipiscing venenatis, erat justo elementum turpis, in dictum libero risus in mauris. Morbi tincidunt mauris justo, at bibendum lacus cursus vitae. Fusce sapien libero, porta pellentesque elementum vel, ultrices mollis est. Aliquam erat volutpat. Nam non turpis id augue gravida vestibulum laoreet in erat. Vivamus rutrum rutrum dolor sed vulputate. Mauris id bibendum tellus, tempor accumsan felis. Ut elit est, rhoncus ut blandit ac, pharetra vitae enim. Duis id mi risus. Sed risus eros, pretium porttitor massa sed, tristique tempus nisl. Nam dignissim convallis odio, vel cursus felis tincidunt at. Proin vel adipiscing mi, ac ullamcorper diam. Maecenas sed ante et sapien placerat facilisis et a risus.</p>

<p>Nulla lobortis, dolor id cursus malesuada, metus sapien condimentum orci, mattis suscipit mi felis id diam. Suspendisse blandit urna sed gravida ultricies. Nullam vel varius dolor, quis ultrices massa. Sed sit amet leo in neque sagittis porta. Donec purus velit, interdum non velit id, tempor consectetur ligula. Pellentesque eu turpis luctus, eleifend mi et, aliquet libero. Quisque a tristique elit. Proin sollicitudin metus elit, a rhoncus mauris cursus quis. Pellentesque tempor nulla sit amet augue rhoncus, nec vehicula orci commodo. Nam et nisi vel velit placerat egestas vitae non elit. In sed urna in nunc tempus tempor nec a ipsum.</p>
';
	}

	public function write($content = null) {

		include(APPLICATION_PATH.'/Template/index.php');
	}
}
