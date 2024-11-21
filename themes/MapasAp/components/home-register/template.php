<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;
?>
<div class="home-register">
    <div class="home-register__background">
        <div class="home-register__background--mask"></div>
    </div>
    <div class="home-register__content">
        <label class="home-register__content--title"><?= $this->text('title', i::__('Faça seu cadastro e colabore com o Mapas Culturais')) ?></label>
        <p class="home-register__content--description"><?= $this->text('description', i::__('Colabore com a plataforma livre, colaborativa e interativa de mapeamento do cenário cultural e instrumento de governança digital no aprimoramento da gestão pública, dos mecanismos de participação e da democratização do acesso às políticas culturais promovidas pela Secretaria da Cultura.')); ?>
        </p>
    </div>
</div>