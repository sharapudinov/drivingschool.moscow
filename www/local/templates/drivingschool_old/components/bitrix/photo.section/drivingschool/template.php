<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
	<?foreach($arResult["ROWS"] as $arItems):?>
        <div class="pbs-row" data-width="full-width-retain-content" style="min-height: 200px; margin-top: -30px; position: relative; margin-left: 0px; margin-right: 0px; ">
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
				?>
                    <div class="pbs-col" style="flex-basis: 25%; margin: 0px !important; padding: 15px;">
                        <p>
                            <a target="_blank" href="<?=$arItem['PICTURE']['SRC']?>" xlink="href" data-rel="lightbox-3" title="">
                                <img class="aligncenter wp-image-864 size-full" src="<?=$arItem['PICTURE']['SRC']?>" >
                            </a>
                        </p>
                    </div>
			<?endif;?>
        <?endforeach?>
        </div>
	<?endforeach?>

