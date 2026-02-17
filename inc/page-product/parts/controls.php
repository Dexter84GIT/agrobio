<div class="tabs-control df fdc">
    <p class="tab df jcsb aic active">Состав и форма выпуска<span>></span></p>
    <?php if (!empty($pharmacological_action)) : ?>
    <p class="tab df jcsb aic">Показания к применению<span>></span></p>
    <?php endif; ?>  
    <?php if (!empty($doses)) : ?>
    <p class="tab df jcsb aic">Способ применения<span>></span></p>
    <?php endif; ?>  
    <?php if ((!empty($side_effects)) || (!empty($contraindications))) : ?>
    <p class="tab df jcsb aic">Противопоказания<span>></span></p>
    <?php endif; ?> 
    <?php if (!empty($terms_of_storage)) : ?>
    <p class="tab df jcsb aic">Условия хранения<span>></span></p>
    <?php endif; ?> 
    <?php if (!empty($expiration_date)) : ?>
    <p class="tab df jcsb aic">Срок годности<span>></span></p>
    <?php endif; ?> 
</div>