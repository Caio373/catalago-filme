import { createClient } from '@supabase/supabase-js';

const supabaseUrl = process.env.NEXT_PUBLIC_SUPABASE_URL!;
const supabaseAnonKey = process.env.NEXT_PUBLIC_SUPABASE_ANON_KEY!;

export const supabase = createClient(supabaseUrl, supabaseAnonKey);

export interface Filme {
  id: string;
  nome: string;
  ano: number | null;
  descricao: string | null;
  img: string | null;
  created_at: string;
  updated_at: string;
}
