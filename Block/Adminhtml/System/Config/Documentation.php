<?php

/**
 * @package   Buzz_AgeValidate
 * @author    github.com/mauricio-tonny
 * @copyright Copyright (c)
 */

namespace Buzz\AgeValidate\Block\Adminhtml\System\Config;

class Documentation extends \Magento\Config\Block\System\Config\Form\Fieldset
{
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {

        return '<p style="font-size: 18px; font-weight: 600;">Informações Gerais</p>
    <br>
    <p>Versão: 1.0</p>
    <br>
    <p>Este módulo têm como objetivo tornar o cadastro na loja permitido apenas para pessoas acima de 18 anos.</p>
    <br>
    <div style="padding: 20px; border: solid 1px #000; background: #eee;">
        <p>Veja as melhorias futuras no <a href="https://github.com/Buzz-Dev-Web/AgeValidate" target="_blank">GitHub</a> da BUZZ</p>
    </div>
    <br>
    <p>Caso ainda houver dúvidas, não se preocupe fale com o suporte !</p>
    <br>
    <p>Desenvolvido por <a href="https://sitedabuzz.com.br" target="_blank" title="Somos apaixonados por Lojas Virtuais">BUZZ</a>.</p>
    ';

    }
}
