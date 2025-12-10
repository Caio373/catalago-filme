# Catálogo de Filmes

Aplicação moderna de catálogo de filmes desenvolvida com Next.js, TypeScript e Tailwind CSS, com banco de dados Supabase.

## Tecnologias

- Next.js 16
- TypeScript
- Tailwind CSS 4
- Supabase
- React 19

## Funcionalidades

- Visualização de filmes em grid moderno
- Página de detalhes de cada filme
- Gerenciamento completo (CRUD) de filmes
- Interface responsiva e elegante
- Design moderno com gradientes e animações

## Estrutura do Banco de Dados

A aplicação utiliza Supabase com a seguinte estrutura:

**Tabela: filmes**
- id (uuid, primary key)
- nome (text, not null)
- ano (integer)
- descricao (text)
- img (text)
- created_at (timestamptz)
- updated_at (timestamptz)

## Páginas

- `/` - Home com grid de filmes
- `/filmes` - Gerenciamento administrativo
- `/filmes/cadastro` - Cadastro/edição de filmes
- `/filmes/[id]` - Detalhes do filme