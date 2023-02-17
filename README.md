# AgeValidate

Este módulo têm como objetivo tornar o cadastro na loja permitido apenas para pessoas acima de 18 anos.

## Requisitos

* Pasta BUZZ dentro da app/code (obrigatório),
* Módulo *Buzz_Base* instalado (obrigatório),

## Compatibilidade

- [x] Testado em Magento 2.2.x
- [x] Testado em Magento 2.3.x
- [x] Testado em Magento 2.4.x

## Instalaçao Manual:

1 -> Certifique-se que a loja encontre-se em modo desenvolvimento,

2 -> Clone este repositório para dentro da sua pasta app/code/Buzz/

3 -> Renomeie a pasta retirando o Buzz- deixando apenas o AgeValidate no nome

4 -> A disposição dos arquivos deve ficar dessa maneira: app/code/Buzz/AgeValidate

5 -> Execute o comando:

```

bin/magento setup:upgrade

```

Posteriormente execute o comando:

```

bin/magento setup:di:compile 

```

6 -> O módulo já está instalado e dispensa configuração.


## Instalaçao via composer

Em desenvolvimento !

## Dúvidas/Problemas

OBS: Não foram detectados BUGS ou problemas de usabilidade no módulo durante os testes, caso houver, abra uma ISSUE para que possamos validar.
