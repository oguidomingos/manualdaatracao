import { Clock, Gift, TrendingUp, AlertTriangle } from "lucide-react";

export function Urgency() {
  return (
    <section className="w-full py-20 md:py-32 bg-primary" id="urgency">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto text-center">
          <h2 className="font-headline text-4xl md:text-5xl font-black uppercase tracking-wide text-transparent bg-clip-text bg-gradient-to-b from-neutral-100 to-neutral-300 drop-shadow-sm">
            Por que essa oferta <span className="text-accent">está disponível hoje?</span>
          </h2>
          <p className="max-w-3xl mx-auto mt-6 text-xl text-neutral-300">
            Esta é uma promoção especial de lançamento. Restam apenas 12 acessos hoje. Depois disso, o valor volta ao normal.
          </p>
          <div className="mt-8 flex justify-center items-center gap-2 font-bold text-accent">
            <AlertTriangle className="w-6 h-6" />
            <span>Restam apenas 12 acessos hoje!</span>
          </div>
        </div>
      </div>
    </section>
  );
}
