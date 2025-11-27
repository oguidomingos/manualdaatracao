import { Card } from "@/components/ui/card";
import { Button } from "@/components/ui/button";

const valueItems = [
  { name: "Curso Principal PornStar Coaching", value: "R$297" },
  { name: "Bônus #1: Controle Absoluto", value: "R$97" },
  { name: "Bônus #2: Código da Confiança Masculina", value: "R$97" },
  { name: "Bônus #3: Arquétipo do Macho Alfa", value: "R$147" },
  { name: "Bônus #4: Comunicação de Alto Impacto", value: "R$147" },
  { name: "Bônus #5: Dominância Silenciosa", value: "R$97" },
];

export function ValueStack() {
  return (
    <section className="w-full py-20 md:py-32 bg-secondary/30">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          Uma oferta <span className="text-accent">impossível de ignorar</span>
        </h2>
        <div className="mt-16 max-w-3xl mx-auto">
          <div className="bg-black/50 border border-accent/30 rounded-2xl shadow-lg">
            {valueItems.map((item, index) => (
              <Card key={index} className="flex justify-between items-center bg-transparent border-b border-accent/20 p-6 last:border-b-0 rounded-none first:rounded-t-2xl last:rounded-b-2xl">
                <p className="text-lg font-medium text-foreground/90">{item.name}</p>
                <p className="text-lg font-bold text-accent">{item.value}</p>
              </Card>
            ))}
          </div>

          <div className="mt-8 text-center">
            <p className="text-xl text-muted-foreground">Valor Total Real:</p>
            <p className="font-headline text-6xl font-black text-primary/50 line-through my-2">R$ 882,00</p>
            <p className="text-2xl text-foreground">Hoje por apenas <span className="font-bold text-accent text-3xl">R$ 37,50</span></p>
             <Button size="lg" className="mt-8 font-bold text-lg bg-accent text-black hover:bg-accent/90">
              QUERO ACESSO POR R$ 37,50
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
}
