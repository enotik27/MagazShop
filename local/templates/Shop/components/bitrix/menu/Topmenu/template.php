<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<!-- Nav -->
<nav id="nav">
	<?/*<a href="index.html">Homepage</a>
	<a href="threecolumn.html">Three Column</a>
	<a href="twocolumn1.html">Two Column #1</a>
	<a href="twocolumn2.html">Two Column #2</a>
	<a href="onecolumn.html">One Column</a>
	*/?>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a>
	<?else:?>
	<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
	<?endif?>
	
<?endforeach?>

</nav>
<?endif?>