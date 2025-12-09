# 👔 Armário Virtual - Sistema CRUD Laravel

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
</p>

## 📋 Sobre o Projeto

**Armário Virtual** é uma aplicação web completa desenvolvida em Laravel que permite gerenciar digitalmente seu guarda-roupa. O sistema implementa um CRUD (Create, Read, Update, Delete) completo para cadastro e organização de roupas, com upload de imagens, categorização e interface responsiva.

### 🎯 Características Principais

- ✅ **CRUD Completo** - Criar, visualizar, editar e excluir roupas
- 📸 **Upload de Imagens** - Sistema completo de upload e gerenciamento de fotos
- 🎨 **Interface Responsiva** - Design mobile-first com Bootstrap 5
- 🏗️ **Arquitetura em Camadas** - Service-Repository-Controller pattern
- ✔️ **Validação Robusta** - Form Requests com mensagens em português
- 🔄 **Componentes Reutilizáveis** - 8 componentes Blade modulares
- 📄 **Paginação** - Listagem otimizada com 12 itens por página
- 🎭 **Categorização** - Tipos, tamanhos, cores, materiais e status

## 🚀 Tecnologias Utilizadas

- **Framework:** Laravel 11.x
- **Linguagem:** PHP 8.2
- **Banco de Dados:** MySQL
- **Template Engine:** Blade
- **Frontend:** Bootstrap 5, Bootstrap Icons
- **CSS:** Modular (variáveis, navbar, cards, forms)
- **Servidor Local:** XAMPP
- **Gerenciador de Dependências:** Composer

## 📁 Arquitetura do Projeto

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── ClothController.php       # Gerencia requisições HTTP
│   │   └── Controller.php            # Controller base
│   └── Requests/
│       ├── StoreClothRequest.php     # Validação de criação
│       └── UpdateClothRequest.php    # Validação de atualização
├── Models/
│   ├── Cloth.php                     # Model Eloquent
│   └── User.php                      # Model de usuário (Laravel)
├── Providers/
│   └── AppServiceProvider.php        # Service provider
├── Repositories/
│   └── ClothRepository.php           # Camada de acesso a dados
└── Services/
    ├── ClothService.php              # Lógica de negócio
    └── ImageService.php              # Gerenciamento de imagens

database/
├── migrations/
│   ├── 0001_01_01_000000_create_users_table.php
│   ├── 0001_01_01_000001_create_cache_table.php
│   ├── 0001_01_01_000002_create_jobs_table.php
│   ├── 2024_01_01_000001_create_clothes_table.php
│   └── 2025_12_09_172638_make_store_and_purchase_date_nullable_in_clothes_table.php
└── seeders/
    └── DatabaseSeeder.php

public/
├── css/
│   └── styles.css                    # CSS compilado
├── storage/                          # Symlink para storage/app/public
├── index.php                         # Entry point
└── robots.txt                        # SEO

routes/
├── web.php                           # Rotas web (resource clothes)
└── console.php                       # Rotas de console

storage/
└── app/
    └── public/
        └── clothes/                      # Imagens das roupas

resources/
├── css/
│   └── modules/                      # CSS modular
│       ├── _variables.css
│       ├── _navbar.css
│       ├── _cards.css
│       └── _forms.css
└── views/
    ├── clothes/                      # Views CRUD
    │   ├── index.blade.php
    │   ├── create.blade.php
    │   ├── edit.blade.php
    │   ├── show.blade.php
    │   └── partials/
    │       └── form-fields.blade.php
    ├── components/                   # Componentes reutilizáveis
    │   ├── alert.blade.php
    │   ├── cloth-card.blade.php
    │   ├── form-image.blade.php
    │   ├── form-input.blade.php
    │   ├── form-select.blade.php
    │   └── status-badge.blade.php
    ├── layouts/                      # Layout principal
    │   └── app.blade.php
    └── partials/                     # Partials globais
        ├── alerts.blade.php
        ├── navbar.blade.php
        └── footer.blade.php

config/
├── app.php                           # Configurações da aplicação
├── database.php                      # Configurações do banco
└── filesystems.php                   # Configurações de storage
```

## ⚙️ Instalação e Configuração

### Pré-requisitos

- PHP 8.2 ou superior
- Composer
- MySQL
- XAMPP (ou outro servidor Apache/MySQL)

### Passo a Passo

1. **Clone o repositório**
```bash
git clone https://github.com/pedrolabre/LTP3-CRUD-Laravel.git
cd LTP3-CRUD-Laravel
```

2. **Instale as dependências**
```bash
composer install
```

3. **Configure o arquivo .env**
```bash
cp .env.example .env
```

Edite o `.env` com suas credenciais do banco de dados:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=armario_virtual
DB_USERNAME=root
DB_PASSWORD=
```

4. **Gere a chave da aplicação**
```bash
php artisan key:generate
```

5. **Execute as migrations**
```bash
php artisan migrate
```

6. **Crie o link simbólico para storage**
```bash
php artisan storage:link
```

7. **Inicie o servidor**
```bash
php artisan serve
```

8. **Acesse a aplicação**
```
http://localhost:8000
```

## 🎨 Funcionalidades

### 📝 Cadastro de Roupas

Campos disponíveis:
- **Nome** (obrigatório)
- **Categoria** (camisa, calça, vestido, jaqueta, saia, shorts, moletom, outro)
- **Cor** (obrigatório)
- **Tamanho** (PP, P, M, G, GG, XG)
- **Material** (obrigatório)
- **Preço** (obrigatório)
- **Loja** (opcional)
- **Data de Compra** (opcional)
- **Status** (novo, usado, desgastado, reparo, doado)
- **Imagem** (opcional, até 2MB - JPG, JPEG, PNG)

### 📊 Listagem

- Grid responsivo (1 col mobile, 2 tablet, 4 desktop)
- Cards com imagem, informações principais e ações
- Badges coloridos de status
- Paginação de 12 itens
- Botões de ação (Visualizar, Editar, Excluir)

### 👁️ Visualização Detalhada

- Layout flexbox com imagem em destaque
- Todas as informações organizadas
- Navegação para editar ou voltar à listagem

### ✏️ Edição

- Formulário pré-preenchido
- Atualização de imagem (mantém anterior se não enviar nova)
- Validação em tempo real

### 🗑️ Exclusão

- Confirmação JavaScript
- Exclusão automática da imagem do storage
- Feedback de sucesso

## 🏗️ Padrão Arquitetural

O projeto segue o padrão **Service-Repository-Controller**:

### Controller (ClothController)
- Recebe requisições HTTP
- Valida dados via Form Requests
- Delega lógica para Services
- Retorna views ou redirects

### Service (ClothService)
- Contém toda a lógica de negócio
- Coordena operações entre Repository e ImageService
- Processa dados antes de persistir

### Repository (ClothRepository)
- Abstrai acesso ao banco de dados
- Usa Eloquent ORM
- Retorna Models ou coleções

### ImageService
- Gerencia upload de imagens
- Exclusão de arquivos antigos
- Atualização de imagens

## 📦 Componentes Blade

### Componentes Criados

1. **cloth-card** - Card de roupa na listagem
2. **alert** - Mensagens de feedback
3. **form-input** - Input de texto reutilizável
4. **form-select** - Select dropdown reutilizável
5. **form-image** - Upload de imagem com preview
6. **status-badge** - Badge colorido de status

### Partials

- **navbar** - Barra de navegação (partials/)
- **alerts** - Exibição de mensagens flash (partials/)
- **footer** - Rodapé da aplicação (partials/)
- **form-fields** - Campos compartilhados entre create/edit (clothes/partials/)

## 📊 Métricas do Projeto

- **Redução de Código:** Controller de 127 → 78 linhas (-38%)
- **Componentes Blade:** 8 componentes reutilizáveis
- **Redução de Duplicação:** -80% com componentes
- **Módulos CSS:** 4 arquivos organizados
- **Services:** 3 (ClothService, ImageService, AppServiceProvider)
- **Total de Arquivos:** 35+ criados/modificados

## 📖 Documentação Completa

Para documentação técnica detalhada, incluindo processo de desenvolvimento, desafios e soluções, acesse:

📄 **[documentacao.html](./documentacao.html)** (abra no navegador)

A documentação inclui:
- Processo de desenvolvimento detalhado
- Desafios técnicos e soluções implementadas
- Recursos e ferramentas utilizadas
- Estrutura completa de arquivos
- Métricas e estatísticas do projeto

## 🤝 Contribuindo

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📝 Licença

Este projeto é um trabalho acadêmico desenvolvido para fins educacionais.

## 👨‍💻 Autor

**Pedro Labre**

- GitHub: [@pedrolabre](https://github.com/pedrolabre)
- Projeto: [LTP3-CRUD-Laravel](https://github.com/pedrolabre/LTP3-CRUD-Laravel)

## 🎓 Contexto Acadêmico

Este projeto foi desenvolvido como atividade acadêmica para demonstrar competências em:
- Desenvolvimento web full-stack com Laravel
- Implementação de padrão CRUD
- Arquitetura em camadas (Service-Repository-Controller)
- Validação de dados e tratamento de erros
- Upload e gerenciamento de arquivos
- Interface responsiva com Bootstrap
- Componentização e reutilização de código

---

<p align="center">
  Feito com ❤️ usando Laravel
</p>

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
