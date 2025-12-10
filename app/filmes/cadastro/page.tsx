import FilmeForm from "@/app/components/FilmeForm";
import { supabase } from "@/lib/supabase";
import type { Filme } from "@/lib/supabase";
import Link from "next/link";

async function getFilme(id: string) {
  const { data, error } = await supabase
    .from("filmes")
    .select("*")
    .eq("id", id)
    .maybeSingle();

  if (error) {
    console.error("Erro ao buscar filme:", error);
    return null;
  }

  return data as Filme | null;
}

export default async function CadastroPage({
  searchParams,
}: {
  searchParams: Promise<{ id?: string }>;
}) {
  const params = await searchParams;
  const filme = params.id ? await getFilme(params.id) : null;

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
      <nav className="bg-slate-900/50 backdrop-blur-sm border-b border-slate-700/50">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between items-center h-16">
            <Link
              href="/filmes"
              className="text-xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent hover:opacity-80 transition-opacity"
            >
              ← Voltar
            </Link>
          </div>
        </div>
      </nav>

      <main className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="mb-8">
          <h1 className="text-4xl font-bold text-white mb-2">
            {filme ? "Editar Filme" : "Novo Filme"}
          </h1>
          <p className="text-slate-400">
            {filme
              ? "Atualize as informações do filme"
              : "Adicione um novo filme ao catálogo"}
          </p>
        </div>

        <div className="bg-slate-800/50 backdrop-blur-sm rounded-xl border border-slate-700/50 p-8 shadow-2xl">
          <FilmeForm filme={filme} />
        </div>
      </main>
    </div>
  );
}
