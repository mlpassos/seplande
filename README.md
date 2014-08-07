Utilização API Seplande
=======

[![Exmeplo Seplande](http://www.alagoas24horas.com.br/legba/admin/temp/thumbs/%7Bd468x350%7D/%7Bh0%7D/d/c/%7Bdc94974b-826e-4ab6-afcc-5fe3bdc2ad35%7D_logo-prefeitura1.jpg)](seplande.gopagoda.com)

Essa aplicação possui exemplo de como consumir dados da API do  Catálogo de Dados da Seplande/AL, e como adicionar um dataset ao catálogo.
A aplicação foi construida em cakephp, mais informações em [CakePHP](http://www.cakephp.org) - The rapid development PHP framework


Consumindo Dados
----------------
	Foi criado um método getJson() dentro do Controller "DatasetController.php"
que recebe o JSON com o método php file_get_contents e em seguida o retorna "print_r($json)",
feito isso o JSON desejado fica acessível para ser trabalhado localmente, exemplo de utilização pode ser visto página inicial. 
A view utilizada é a View/Pages/home e o arquivo js é domicilios.js.

OBS foi utilizado o [Chartjs](http://www.chartjs.org/docs/) para criar o gráfico

Inserindo DataSet CKAN
---------------------
	Foi iniciado o método para adicionar Dataset, porém o mesmo não pode ser concluído/testado 
devido a questões técnicas de segurança. O método constitui em receber um formulário e criar o objeto 
JSON que é passado para a classe Ckan_client.php. Isso pode ser visto dentro do arquivo 
Controller/DatasetController.php. 
	A documentação do Ckan_client.php está dispónivel em 
[Ckan_client](https://github.com/jeffreybarke/Ckan_client-PHP)

OBS: php5-curl é necessário

Futras Implementações
---------------------
	Em virtude de algumas limitações técnicas da API foi desenvolvido também um método para trabalhar com os dados em XML que será também disponibilizado em breve.
