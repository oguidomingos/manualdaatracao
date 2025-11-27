import { Card } from "@/components/ui/card";
import { BookLock, Handshake, BrainCircuit, Users, HeartPulse, Sparkles } from "lucide-react";

const modules = [
  { icon: Handshake, title: "Comunicação & Consentimento" },
  { icon: BrainCircuit, title: "Leitura Corporal" },
  { icon: Sparkles, title: "Química & Psicologia" },
  { icon: Users, title: "Condução & Ritmo" },
  { icon: BookLock, title: "Exploração Segura" },
  { icon: HeartPulse, title: "Posições & Presença Masculina" },
];

export function InsidePreview() {
  return (
    <section className="w-full py-20 md:py-32 bg-secondary" id="inside">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          Veja exatamente o que tem <span className="text-accent">dentro do curso</span>
        </h2>
        <p className="text-center max-w-2xl mx-auto mt-4 text-lg text-muted-foreground">
          Uma espiada nos módulos que vão reprogramar sua realidade com as mulheres.
        </p>
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
          {modules.map((mod, index) => {
            return (
              <Card key={index} className="bg-card/80 border border-accent/20 rounded-xl p-6 text-center group shadow-lg shadow-black/30 hover:shadow-accent/20 hover:-translate-y-2 transition-all duration-300">
                <div className="flex justify-center mb-4">
                    <div className="p-3 bg-accent/10 rounded-lg border border-accent/30">
                      <mod.icon className="w-8 h-8 text-accent" />
                    </div>
                  </div>
                  <h3 className="text-xl font-bold">{mod.title}</h3>
              </Card>
            );
          })}
        </div>
      </div>
    </section>
  );
}
