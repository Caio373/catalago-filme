"use client";

import { useState } from "react";
import { useRouter } from "next/navigation";
import { supabase } from "@/lib/supabase";
import type { Filme } from "@/lib/supabase";

interface FilmeFormProps {
  filme: Filme | null;
}

export default function FilmeForm({ filme }: FilmeFormProps) {
  const router = useRouter();
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [formData, setFormData] = useState({
    nome: filme?.nome || "",
    ano: filme?.ano?.toString() || "",
    descricao: filme?.descricao || "",
    img: filme?.img || "",
  });

  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>
  ) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitting(true);

    try {
      const dados = {
        nome: formData.nome,
        ano: formData.ano ? parseInt(formData.ano) : null,
        descricao: formData.descricao || null,
        img: formData.img || null,
        updated_at: new Date().toISOString(),
      };

      if (filme) {
        const { error } = await supabase
          .from("filmes")
          .update(dados)
          .eq("id", filme.id);

        if (error) throw error;
      } else {
        const { error } = await supabase.from("filmes").insert([dados]);

        if (error) throw error;
      }

      router.push("/filmes");
      router.refresh();
    } catch (error) {
      console.error("Erro ao salvar filme:", error);
      alert("Erro ao salvar o filme. Tente novamente.");
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <form onSubmit={handleSubmit} className="space-y-6">
      <div>
        <label
          htmlFor="img"
          className="block text-sm font-medium text-slate-300 mb-2"
        >
          URL da Imagem
        </label>
        <input
          type="url"
          id="img"
          name="img"
          value={formData.img}
          onChange={handleChange}
          className="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
          placeholder="https://exemplo.com/imagem.jpg"
        />
      </div>

      <div>
        <label
          htmlFor="nome"
          className="block text-sm font-medium text-slate-300 mb-2"
        >
          Nome do Filme <span className="text-red-400">*</span>
        </label>
        <input
          type="text"
          id="nome"
          name="nome"
          value={formData.nome}
          onChange={handleChange}
          required
          className="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
          placeholder="Digite o nome do filme"
        />
      </div>

      <div>
        <label
          htmlFor="ano"
          className="block text-sm font-medium text-slate-300 mb-2"
        >
          Ano de Lançamento
        </label>
        <input
          type="number"
          id="ano"
          name="ano"
          value={formData.ano}
          onChange={handleChange}
          min="1888"
          max={new Date().getFullYear() + 5}
          className="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
          placeholder="2024"
        />
      </div>

      <div>
        <label
          htmlFor="descricao"
          className="block text-sm font-medium text-slate-300 mb-2"
        >
          Descrição
        </label>
        <textarea
          id="descricao"
          name="descricao"
          value={formData.descricao}
          onChange={handleChange}
          rows={4}
          className="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
          placeholder="Digite uma breve descrição do filme"
        />
      </div>

      <div className="flex gap-4 pt-4">
        <button
          type="submit"
          disabled={isSubmitting}
          className="flex-1 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-all duration-200 shadow-lg shadow-blue-500/20 hover:shadow-blue-500/40 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center gap-2"
        >
          {isSubmitting ? (
            <>
              <svg
                className="w-5 h-5 animate-spin"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                />
              </svg>
              Salvando...
            </>
          ) : (
            <>
              <svg
                className="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  strokeWidth={2}
                  d="M5 13l4 4L19 7"
                />
              </svg>
              Salvar
            </>
          )}
        </button>
        <button
          type="button"
          onClick={() => router.back()}
          disabled={isSubmitting}
          className="px-6 py-3 bg-slate-700 hover:bg-slate-600 text-white rounded-lg font-medium transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
        >
          Cancelar
        </button>
      </div>
    </form>
  );
}
