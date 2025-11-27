import { Check } from "lucide-react";

const benefits = [
  "Confiança real, não imitada",
  "Leitura corporal precisa",
  "Controle emocional",
  "Presença masculina forte",
  "Condução natural",
  "Zero vergonha e zero confusão",
  "Resultados imediatos e perceptíveis"
];

export function Benefits() {
  return (
    <section className="w-full py-20 md:py-32 bg-secondary" id="benefits">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto text-center">
          <h2 className="font-headline text-4xl md:text-5xl font-black uppercase tracking-wide">
            Você vai sentir a diferença em você, <br/><span className="text-accent">e ela vai sentir também.</span>
          </h2>
          <ul className="grid grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-6 text-left mt-16 max-w-3xl mx-auto">
            {benefits.map((benefit, index) => (
              <li key={index} className="flex items-center gap-3">
                <Check className="w-6 h-6 text-accent flex-shrink-0" />
                <span className="text-lg text-foreground/90">{benefit}</span>
              </li>
            ))}
          </ul>
        </div>
      </div>
    </section>
  );
}
