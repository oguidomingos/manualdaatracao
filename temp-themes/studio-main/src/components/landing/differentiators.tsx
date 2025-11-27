import { Card } from "@/components/ui/card";
import { Zap, BrainCircuit, Heart, UserCheck } from "lucide-react";

const diffs = [
  { icon: Zap, title: "Foco no Prazer Feminino", description: "Ensina o que nenhum amigo, vídeo ou guru ensina de verdade." },
  { icon: BrainCircuit, title: "Baseado em Profissionais", description: "Baseado em profissionais com décadas de experiência real e prática." },
  { icon: Heart, title: "Conexão e Condução", description: "Não é teoria de blog: é prática refinada para criar conexão." },
  { icon: UserCheck, title: "Transformação Inesquecível", description: "Focado em te transformar em alguém impossível de esquecer." }
]

export function Differentiators() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="differentiators">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          O que faz o PornStar Coaching ser <span className="text-primary">único?</span>
        </h2>
        <div className="grid md:grid-cols-2 gap-8 mt-16 max-w-5xl mx-auto">
          {diffs.map((item, index) => (
            <Card key={index} className="flex items-center gap-6 p-6 bg-card border-border rounded-xl hover:bg-card/80 transition-colors duration-300">
              <div className="p-3 bg-primary/10 rounded-lg border border-primary/30">
                <item.icon className="w-8 h-8 text-primary" />
              </div>
              <div>
                <h3 className="text-xl font-bold">{item.title}</h3>
                <p className="text-muted-foreground">{item.description}</p>
              </div>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
}
