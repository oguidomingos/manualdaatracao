import { Card } from "@/components/ui/card";

const steps = [
  { title: "Aprenda a ler o corpo feminino", description: "Sinais, microexpressões, abertura e ritmo." },
  { title: "Entenda a psicologia do prazer", description: "O que realmente ativa a entrega, a conexão e a confiança." },
  { title: "Domine a comunicação e a condução", description: "Como liderar sem parecer inseguro, forçado ou robótico." },
  { title: "Aplique técnicas profissionais", description: "Não é teoria: é o que funciona no dia a dia de forma realista." },
  { title: "Torne-se inesquecível", description: "Porque você finalmente sabe o que está fazendo." },
];

export function HowItWorks() {
  return (
    <section className="w-full py-20 md:py-32 bg-background" id="steps">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          As <span className="text-primary">Etapas do Método</span>
        </h2>
        <div className="relative mt-16 max-w-5xl mx-auto flex flex-col gap-12">
          {steps.map((step, index) => (
             <div key={index} className="relative flex items-center gap-8">
              <div className="flex-shrink-0 w-16 h-16 flex items-center justify-center bg-card border-2 border-copper rounded-full z-10">
                  <span className="font-headline text-4xl font-black text-copper">
                    {index + 1}
                  </span>
              </div>
              <Card className="bg-card border border-copper/20 rounded-xl p-6 flex-1">
                <h3 className="font-headline text-2xl font-bold">{step.title}</h3>
                <p className="mt-2 text-muted-foreground">{step.description}</p>
              </Card>
              {index < steps.length - 1 && (
                 <div className="absolute left-8 top-16 bottom-0 w-px bg-copper/30"></div>
              )}
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
