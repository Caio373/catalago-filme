/*
  # Criar tabela de filmes

  1. Nova Tabela
    - `filmes`
      - `id` (uuid, primary key) - Identificador único do filme
      - `nome` (text, not null) - Nome do filme
      - `ano` (integer) - Ano de lançamento
      - `descricao` (text) - Descrição do filme
      - `img` (text) - URL da imagem do filme
      - `created_at` (timestamptz) - Data de criação do registro
      - `updated_at` (timestamptz) - Data de atualização do registro
  
  2. Segurança
    - Habilitar RLS na tabela `filmes`
    - Adicionar política para permitir leitura pública
    - Adicionar política para permitir inserção autenticada
    - Adicionar política para permitir atualização autenticada
    - Adicionar política para permitir exclusão autenticada
*/

CREATE TABLE IF NOT EXISTS filmes (
  id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  nome text NOT NULL,
  ano integer,
  descricao text,
  img text,
  created_at timestamptz DEFAULT now(),
  updated_at timestamptz DEFAULT now()
);

ALTER TABLE filmes ENABLE ROW LEVEL SECURITY;

-- Política para permitir leitura pública (qualquer pessoa pode ver os filmes)
CREATE POLICY "Permitir leitura pública de filmes"
  ON filmes FOR SELECT
  TO public
  USING (true);

-- Política para permitir inserção apenas para usuários autenticados
CREATE POLICY "Permitir inserção para usuários autenticados"
  ON filmes FOR INSERT
  TO authenticated
  WITH CHECK (true);

-- Política para permitir atualização apenas para usuários autenticados
CREATE POLICY "Permitir atualização para usuários autenticados"
  ON filmes FOR UPDATE
  TO authenticated
  USING (true)
  WITH CHECK (true);

-- Política para permitir exclusão apenas para usuários autenticados
CREATE POLICY "Permitir exclusão para usuários autenticados"
  ON filmes FOR DELETE
  TO authenticated
  USING (true);