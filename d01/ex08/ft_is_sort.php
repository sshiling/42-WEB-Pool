<?php
function ft_is_sort($tab1)
{
	$i = 0;
	$tab2 = $tab1;
	sort($tab2);
	while ($tab1[$i])
	{
		if ($tab1[$i] != $tab2[$i])
			return (0);
		$i++;
	}
	return (1);
}
?>