<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<ul id="main-menu" class="menu">


<?
$array_ico = array(
    "/prices/" => "fa-cc-visa",
    "/new_groups/" => "fa-calendar",
    "/how_to_apply/" => "fa-comments",
//    "/how_to_apply/" => "fa-id-card-o",
    "/schedule/" => "fa-clock-o",
    "/questions_and_answers/" => "fa-comments",
    "/contacts/" => "fa-phone",
);

$previousLevel = 0;
foreach($arResult as $arItem):
    ?>
    <li id="menu-item-<?=$previousLevel?>" class="menu-item menu-item-type-custom menu-item-object-custom <?if ($arItem["SELECTED"]):?>current-menu-item<?endif;?> menu-item-<?=$previousLevel?>">
        <a href="<?=$arItem["LINK"]?>"><i class="fa <?=$array_ico[$arItem["LINK"]]?>" aria-hidden="true"></i>&nbsp;&nbsp;<?=$arItem["TEXT"]?>&nbsp;</a>
        <a class="sublinklink"><i class="material-icons">keyboard_arrow_down</i></a>
    </li>
<?  $previousLevel++; continue; ?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif?>