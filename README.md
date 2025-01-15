Control Finances - SaaS de Controle de Finanças
O CaféControl é um projeto desenvolvido como parte da formação Full Stack PHP Developer da UpInside Treinamentos. Trata-se de uma aplicação SaaS voltada para o gerenciamento financeiro pessoal e empresarial, com recursos para administração de despesas, receitas, categorias e um painel de administração completo para gerenciar os usuários e o sistema.

🚀 Funcionalidades
Área do Usuário
Registro e autenticação de usuários.
Cadastro de despesas e receitas com categorias personalizáveis.
Relatórios financeiros dinâmicos para análise de entradas e saídas.
Interface intuitiva e responsiva.
Painel Administrativo
Gerenciamento de usuários e permissões.
Controle das categorias financeiras padrão.
Relatórios e métricas globais do sistema.
Configurações gerais do SaaS.
🛠️ Tecnologias Utilizadas
O Control Finances foi desenvolvido utilizando as seguintes tecnologias:

Back-end: PHP 8+ com padrão PSR e MySQL para banco de dados.
Front-end: HTML5, CSS3, JavaScript (com jQuery).
Framework: Estrutura MVC própria ensinada no curso.
APIs: Integração com APIs financeiras para atualização de taxas de câmbio (opcional).
Outros: Composer para gerenciamento de dependências.
📦 Como Usar
Pré-requisitos
Servidor web com suporte a PHP (Apache ou Nginx recomendado).
Banco de dados MySQL.
Composer instalado para gerenciar dependências.
Instalação
Clone o repositório:

bash
Copiar código
git clone https://github.com/seu-usuario/cafecontrol.git
cd cafecontrol
Instale as dependências:

bash
Copiar código
composer install
Configure o arquivo .env com suas credenciais de banco de dados:

env
Copiar código
DB_HOST=localhost
DB_NAME=cafecontrol
DB_USER=seu_usuario
DB_PASS=sua_senha
Importe o banco de dados:

Localize o arquivo cafecontrol.sql na raiz do projeto e importe-o para o MySQL.
Inicie o servidor:

bash
Copiar código
php -S localhost:8000
Acesse a aplicação:

Área do usuário: http://localhost:8000
Painel administrativo: http://localhost:8000/admin
📝 Licença
Este projeto foi desenvolvido com fins educacionais e está sob a licença MIT. Sinta-se à vontade para usá-lo e adaptá-lo para projetos pessoais ou comerciais.