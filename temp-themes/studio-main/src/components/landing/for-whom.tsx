import { Check, X } from "lucide-react";

const forYou = [
  "Homens que estão cansados de se sentir medianos",
  "Homens que querem evoluir agora",
  "Homens que querem parar de passar vergonha",
  "Homens que querem ser lembrados",
];

const notForYou = [
  "Curiosos e preguiçosos",
  "Homens que só querem assistir, mas não aplicar",
  "Quem não quer assumir controle da própria vida",
];

export function ForWhom() {
  return (
    <section className="w-full py-20 md:py-32 bg-secondary/30" id="for-whom">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
          <div>
            <h3 className="font-headline text-3xl font-black uppercase text-center mb-8">
              Este programa <span className="text-primary">é para</span>...
            </h3>
            <ul className="space-y-4">
              {forYou.map((item, index) => (
                <li key={index} className="flex items-start gap-4 p-4 bg-card/50 border-l-4 border-primary rounded-r-lg">
                  <Check className="w-6 h-6 text-primary mt-1 flex-shrink-0" />
                  <span className="text-lg text-foreground/90">{item}</span>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h3 className="font-headline text-3xl font-black uppercase text-center mb-8">
              E <span className="text-muted-foreground">NÃO é para</span>...
            </h3>
            <ul className="space-y-4">
              {notForYou.map((item, index) => (
                <li key={index} className="flex items-start gap-4 p-4 bg-card/30 border-l-4 border-muted-foreground rounded-r-lg">
                  <X className="w-6 h-6 text-muted-foreground mt-1 flex-shrink-0" />
                  <span className="text-lg text-foreground/70">{item}</span>
                </li>
              ))}
            </ul>
          </div>
        </div>
      </div>
    </section>
  );
}
