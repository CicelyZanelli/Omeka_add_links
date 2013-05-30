<?php
  add_filter(array('Display', 'Item', 'Item Type Metadata', 'Local URL'), 'my_link_function');

	function my_link_function($text, $record, $elementText)
	{
		return "<a href='$text' target='_blank'.>$text</a>";
	}
?>
