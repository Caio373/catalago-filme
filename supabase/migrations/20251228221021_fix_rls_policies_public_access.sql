/*
  # Corrigir políticas RLS para acesso público

  1. Mudanças
    - Remover políticas antigas que exigiam autenticação
    - Adicionar novas políticas permitindo acesso público para todas operações
    
  2. Motivo
    - A aplicação não possui sistema de autenticação
    - Permitir gerenciamento completo dos filmes sem autenticação
*/

-- Remover políticas antigas
DROP POLICY IF EXISTS "Permitir leitura pública de filmes" ON filmes;
DROP POLICY IF EXISTS "Permitir inserção para usuários autenticados" ON filmes;
DROP POLICY IF EXISTS "Permitir atualização para usuários autenticados" ON filmes;
DROP POLICY IF EXISTS "Permitir exclusão para usuários autenticados" ON filmes;

-- Criar novas políticas para acesso público
CREATE POLICY "Acesso público para leitura"
  ON filmes FOR SELECT
  TO public
  USING (true);

CREATE POLICY "Acesso público para inserção"
  ON filmes FOR INSERT
  TO public
  WITH CHECK (true);

CREATE POLICY "Acesso público para atualização"
  ON filmes FOR UPDATE
  TO public
  USING (true)
  WITH CHECK (true);

CREATE POLICY "Acesso público para exclusão"
  ON filmes FOR DELETE
  TO public
  USING (true);
