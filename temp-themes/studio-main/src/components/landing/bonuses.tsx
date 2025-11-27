import { Card, CardContent } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import Image from "next/image";
import { PlaceHolderImages } from "@/lib/placeholder-images";

const bonusList = [
  { id: "bonus-1", title: "Controle Absoluto", value: "R$97", hint: "book cover gold" },
  { id: "bonus-2", title: "Código da Confiança Masculina", value: "R$97", hint: "book cover metal" },
  { id: "bonus-3", title: "Arquétipo do Macho Alfa", value: "R$147", hint: "book cover wolf" },
  { id: "bonus-4", title: "Comunicação de Alto Impacto", value: "R$147", hint: "book cover talk" },
  { id: "bonus-5", title: "Dominância Silenciosa", value: "R$97", hint: "book cover dark lion" },
];

export function Bonuses() {
  return (
    <section className="w-full py-20 md:py-32 bg-primary/10" id="bonuses">
      <div className="container mx-auto px-4">
        <h2 className="font-headline text-4xl md:text-5xl font-black uppercase text-center tracking-wide">
          Receba <span className="text-accent">5 Bônus</span> Premium Hoje
        </h2>
        <p className="text-center max-w-2xl mx-auto mt-4 text-lg text-muted-foreground">
          Ao garantir sua vaga agora, você leva também um pacote de bônus premium, totalmente de graça.
        </p>
        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8 mt-16">
          {bonusList.map((bonus) => {
            const placeholder = PlaceHolderImages.find(p => p.id === bonus.id);
            return (
              <Card key={bonus.id} className="bg-card border-accent/20 rounded-xl overflow-hidden group shadow-lg shadow-black/30 hover:shadow-accent/20 hover:-translate-y-2 transition-all duration-300">
                <CardContent className="p-0">
                  <div className="aspect-[4/5] bg-muted overflow-hidden">
                    <Image
                      src={placeholder?.imageUrl || `https://picsum.photos/seed/${bonus.id}/400/500`}
                      alt={placeholder?.description || `Capa do bônus ${bonus.title}`}
                      width={400}
                      height={500}
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                      data-ai-hint={bonus.hint}
                    />
                  </div>
                  <div className="p-4 text-center">
                    <h3 className="font-bold h-10">{bonus.title}</h3>
                    <Badge variant="secondary" className="mt-2 text-accent border border-accent/50 bg-accent/10">
                      Valor: {bonus.value}
                    </Badge>
                  </div>
                </CardContent>
              </Card>
            );
          })}
        </div>
      </div>
    </section>
  );
}
