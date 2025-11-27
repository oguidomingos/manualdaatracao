import { Card } from "@/components/ui/card";
import { XCircle, CheckCircle2 } from "lucide-react";

const dores = [
  "Inseguro",
  "Perdido",
  "Nunca sabe se ela gostou",
  "Ansiedade",
  "Momentos estranhos",
  "Ela se afasta",
];

const ganhos = [
  "Confiante",
  "No controle",
  "Leitura precisa",
  "Conexão real",
  "Energia masculina forte",
  "Ela querendo mais",
];

export function DorVsTransformacao() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="transformation">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
          <div className="bg-destructive/10 border border-destructive/30 p-8 rounded-2xl">
            <h3 className="font-headline text-3xl font-black uppercase text-center text-destructive">
              ❌ ANTES
            </h3>
            <ul className="mt-8 space-y-4">
              {dores.map((dor, index) => (
                <li key={index} className="flex items-start gap-3">
                  <XCircle className="w-6 h-6 text-destructive/80 mt-1 flex-shrink-0" />
                  <span className="text-lg text-foreground/80">{dor}</span>
                </li>
              ))}
            </ul>
          </div>

          <div className="bg-green-500/10 border border-green-500/30 p-8 rounded-2xl">
            <h3 className="font-headline text-3xl font-black uppercase text-center text-green-500">
              ✅ DEPOIS
            </h3>
            <ul className="mt-8 space-y-4">
              {ganhos.map((ganho, index) => (
                <li key={index} className="flex items-start gap-3">
                  <CheckCircle2 className="w-6 h-6 text-green-500/80 mt-1 flex-shrink-0" />
                  <span className="text-lg text-foreground/90">{ganho}</span>
                </li>
              ))}
            </ul>
          </div>
        </div>
      </div>
    </section>
  );
}
