import { Card } from "@/components/ui/card";
import { Clock, Award, Smartphone, InfinityIcon, Rows, Gift, ShieldCheck, Star } from "lucide-react";

const items = [
  { icon: Clock, text: "Mais de 3 horas de conteúdo" },
  { icon: Award, text: "7 Módulos Completos" },
  { icon: Rows, text: "Aulas Detalhadas" },
  { icon: InfinityIcon, text: "Acesso Vitalício" },
  { icon: Smartphone, text: "Acesso no Celular e PC" },
  { icon: Star, text: "Atualizações Gratuitas" },
  { icon: Gift, text: "4 Bônus Premium" },
  { icon: ShieldCheck, text: "Área de Membros Organizada" },
];

export function WhatYouGet() {
  return (
    <section className="w-full py-20 md:py-32 bg-primary/10">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          Tudo o que você <span className="text-primary">recebe hoje</span>
        </h2>
        <p className="text-center max-w-2xl mx-auto mt-4 text-lg text-muted-foreground">
          Ao entrar no PornStar Coaching, você garante acesso imediato a um arsenal completo e explicado, sem enrolação.
        </p>
        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-16 max-w-6xl mx-auto">
          {items.map((item, index) => (
            <Card key={index} className="bg-card/50 backdrop-blur-lg border border-accent/20 rounded-xl p-6 text-center group hover:border-accent/50 hover:bg-card/70 transition-all duration-300">
              <div className="flex flex-col items-center gap-4">
                <item.icon className="w-10 h-10 text-accent group-hover:scale-110 transition-transform" />
                <p className="text-lg font-semibold text-foreground">{item.text}</p>
              </div>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
}
