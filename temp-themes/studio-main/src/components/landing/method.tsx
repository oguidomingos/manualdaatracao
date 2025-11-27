import { Card, CardHeader, CardTitle, CardContent } from "@/components/ui/card";
import { Target, Glasses, BrainCircuit, Users } from "lucide-react";

const pillars = [
  { icon: Target, title: "Ninguém te ensinou a conduzir." },
  { icon: Glasses, title: "Ninguém te ensinou a ler sinais." },
  { icon: BrainCircuit, title: "Ninguém te ensinou o que realmente dá prazer." },
  { icon: Users, title: "Ninguém te ensinou a liderar um momento íntimo." },
];

export function Method() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="method">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          O método que resolve o que você <span className="text-primary">tenta ignorar</span>
        </h2>
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
          {pillars.map((pillar, index) => (
            <Card key={index} className="bg-card/50 backdrop-blur-md border border-primary/30 text-center hover:border-primary hover:-translate-y-2 transition-all duration-300 rounded-xl p-4">
              <CardHeader className="items-center">
                <div className="p-4 bg-primary/10 rounded-lg border border-primary/30">
                  <pillar.icon className="w-10 h-10 text-primary" />
                </div>
              </CardHeader>
              <CardContent>
                <p className="text-lg font-semibold">{pillar.title}</p>
              </CardContent>
            </Card>
          ))}
        </div>
        <p className="text-center max-w-3xl mx-auto mt-12 text-xl text-muted-foreground">
          O PornStar Coaching existe porque você foi abandonado à própria sorte, <span className="text-foreground font-semibold">e agora vai aprender com quem mais entende do assunto.</span>
        </p>
      </div>
    </section>
  );
}
