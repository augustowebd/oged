oged
====
Gerenciador Eletrônico de Documento

manifest
========
O oGed é um conjunto de módulos trabalhando de forma integrada e estes gereciado por um contexto
central (oGed). O oGed fará o controle dos módulos valendo-se do arquivo manifest.oged de cada
módulo[1] armazenado em /application.

O manifesto é um arquivo do tipo JSON que descreve um módulo. Esse arquivo se chama manifest.oged
e armazenado na raiz de cada módulo.

Um manisfesto poderá conter qualquer quantidade de propriedades, porém, as propriedades abaixo são
requeridas:
<pre>
  - module:
    - name        : [string] - nome do módulo
    - version     : [string] - versão do módulo
    - launch      : [string] - nome do script inicial
    - description : [string] - descrição do módulo, o que ele faz, onde se emprega, etc
    - type        : [enum]   - admin: o módulo será disponibilizado apenas no lado do servidor
                             - user:  o módulo será disponbilizado apenas no lado do usuário
                             - both:  o módulo será disponibilizado na adminstração e usuário
    - icon        : [object] - lista de icones usados pelo módulo
    - css         : [object] - lista de CSS usado pelo módulo
    - js          : [object] - lista de javascript usado pelo módulo


  - developer:
    - name        : [string] - nome do desenvolvedor do módulo
    - email       : [string] - e-mail do desenvolvedor do módulo
    - url         : [string] - site do desenvolvedor do módulo
</pre>

Exemplo de arquivo manifesto.oged
=================================
<pre>

{
    "module": {
        "name": "moduledefault",
        "version": "0.0.1",
        "launch": "/application/moduleName/initModule",
        "description": "oGeddefaultmodule",
        "type": "both",
        "icon": {
            "icon_x": "/media/style/icons/modules/moduleName/icon_x.png",
            "icon_y": "/media/style/icons/modules/moduleName/icon_y.png",
            "icon_z": "/media/style/icons/modules/moduleName/icon_z.png"
        },
        "css": {
            "css_x": "/media/style/css/modules/moduleName/stylesheets_x.css",
            "css_y": "/media/style/css/modules/moduleName/stylesheets_y.css",
            "css_z": "/media/style/css/modules/moduleName/stylesheets_z.css"
        },
        "js": {
            "js_x": "/media/style/js/modules/moduleName/javascript_x.js",
            "js_y": "/media/style/js/modules/moduleName/javascript_y.js",
            "js_z": "/media/style/js/modules/moduleName/javascript_z.js"
        },
        "developer": {
            "name": "J.Augusto-augustowebd",
            "email": "augustowebd@gmail.com",
            "url": "http: //augustowebd.blogspot.com"
        }
    }
}
</pre>

Nota: Dentro do manifesto os caminhos devem ser separados usando '/', o oGed garantirar
a portabilidade de plataforma.

Nota: Como programador você está livre para incluir tantas entradas no manisfesto quantas
sejam necessarias. Porém, não esqueça de incluir os definidos acima ;)

1 - Um módulo deve ser abastrato o suficiente para atender a qualquer outro módulo e especifico o
bastante para efetuar apenas o seu trabalho.


